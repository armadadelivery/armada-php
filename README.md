# armada/sdk (PHP)

## Install

From Packagist (once published):

```bash
composer require armada/sdk
```

Directly from the GitHub repo — no Packagist entry needed. Add this to
your `composer.json`:

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/armadadelivery/armada-php" }
    ],
    "require": {
        "armada/sdk": "dev-main"
    },
    "minimum-stability": "dev"
}
```

Then `composer install`. To pin to a release tag, replace `dev-main`
with e.g. `^0.1.0-beta.0` and drop `minimum-stability`.

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
