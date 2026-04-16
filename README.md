# armada/sdk (PHP)

```bash
composer require armada/sdk
```

```php
use Armada\SDK\ArmadaClient;

$armada = new ArmadaClient([
    'apiKey' => getenv('ARMADA_API_KEY'),
    'apiSecret' => getenv('ARMADA_API_SECRET'),
]);

$res = $armada->get('/v2/wallet');
$body = json_decode((string) $res->getBody(), true);
$rate = $armada->rateLimitFor($res);
```

## What it handles

- HMAC-SHA256 request signing
- Standard Guzzle interface — `get`, `postJson`, `putJson`, `delete`, or the full `request(method, path, options)`
- Rate-limit headers exposed via `rateLimitFor($response)`

## Generated typed resources

We're rolling out typed resource classes generated from the OpenAPI spec
on every api release (see the monorepo's `scripts/regen.sh`). Until
then, hand-build request bodies per the spec at
[docs.armadadelivery.com/v2](https://docs.armadadelivery.com/v2).
