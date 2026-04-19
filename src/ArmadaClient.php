<?php

namespace Armada\SDK;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * ArmadaClient — HMAC-signing v2 API client.
 *
 * Usage:
 *   $armada = new ArmadaClient([
 *     'apiKey' => getenv('ARMADA_API_KEY'),
 *     'apiSecret' => getenv('ARMADA_API_SECRET'),
 *   ]);
 *   $res = $armada->get('/v2/wallet');
 *   $res->getStatusCode();        // 200
 *   $res->getBody();              // JSON string
 *   $armada->rateLimitFor($res);  // [limit, remaining, resetUnix]
 */
class ArmadaClient
{
    private string $apiSecret;
    private Client $http;

    public function __construct(array $opts)
    {
        if (empty($opts['apiKey'])) throw new \InvalidArgumentException('apiKey is required');
        if (empty($opts['apiSecret'])) throw new \InvalidArgumentException('apiSecret is required');

        $this->apiSecret = $opts['apiSecret'];
        // Defaults to production. Use a Test-mode API key to simulate
        // deliveries without dispatching a real driver. Pass
        // https://sandbox.api.armadadelivery.com as $opts['baseUrl']
        // explicitly only if you need the fully-isolated sandbox env.
        $base = $opts['baseUrl'] ?? 'https://api.armadadelivery.com';

        $stack = HandlerStack::create();
        $stack->push(Middleware::mapRequest(function (RequestInterface $req) use ($opts) {
            return $this->sign($req, $opts['apiKey']);
        }));

        $this->http = new Client([
            'base_uri' => $base,
            'handler' => $stack,
            'http_errors' => false,
            'timeout' => $opts['timeoutMs'] ?? 30,
            'headers' => ['Content-Type' => 'application/json', 'User-Agent' => 'armada/sdk (php)'],
        ]);
    }

    private function sign(RequestInterface $req, string $apiKey): RequestInterface
    {
        $timestamp = (string) (int) (microtime(true) * 1000);
        $method = $req->getMethod();
        $path = $req->getUri()->getPath();
        if ($req->getUri()->getQuery() !== '') $path .= '?' . $req->getUri()->getQuery();
        $body = (string) $req->getBody();
        $payload = "{$timestamp}.{$method}.{$path}.{$body}";
        $signature = hash_hmac('sha256', $payload, $this->apiSecret);

        return $req
            ->withHeader('Authorization', "Key {$apiKey}")
            ->withHeader('x-armada-timestamp', $timestamp)
            ->withHeader('x-armada-signature', $signature);
    }

    public function request(string $method, string $path, array $options = []): ResponseInterface
    {
        return $this->http->request($method, $path, $options);
    }

    public function get(string $path, array $query = []): ResponseInterface
    {
        return $this->request('GET', $path, ['query' => $query]);
    }

    public function postJson(string $path, array $body): ResponseInterface
    {
        return $this->request('POST', $path, ['body' => json_encode($body, JSON_UNESCAPED_SLASHES)]);
    }

    public function putJson(string $path, array $body): ResponseInterface
    {
        return $this->request('PUT', $path, ['body' => json_encode($body, JSON_UNESCAPED_SLASHES)]);
    }

    public function delete(string $path): ResponseInterface
    {
        return $this->request('DELETE', $path);
    }

    /** @return array{limit:int|null,remaining:int|null,resetUnix:int|null} */
    public function rateLimitFor(ResponseInterface $res): array
    {
        $h = fn(string $name) => $res->hasHeader($name) ? (int) $res->getHeader($name)[0] : null;
        return [
            'limit' => $h('X-RateLimit-Limit'),
            'remaining' => $h('X-RateLimit-Remaining'),
            'resetUnix' => $h('X-RateLimit-Reset'),
        ];
    }
}
