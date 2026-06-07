# OpenAPIClient-php

The v2 API exposes the Armada delivery platform to merchant partners. Every
request is authenticated with a merchant-scoped API key + secret using
HMAC-SHA256 request signing. All endpoints are idempotent to retry when the
response is a network error; duplicate keys de-dupe on `reference`.

## Authentication

Send every request with three headers:

- `Authorization: Key <api_key_value>`
- `x-armada-timestamp: <milliseconds since epoch>`
- `x-armada-signature: <hex HMAC-SHA256>`

The signature is `HMAC_SHA256(secret, \"${timestamp}.${method}.${path}.${body}\")`.
For `GET` requests the body is the empty string. The signature must arrive
within 30 seconds of the timestamp.

## Rate limits

Every response carries:

- `X-RateLimit-Limit` — the ceiling for this request's category
- `X-RateLimit-Remaining` — how many calls remain in the current window
- `X-RateLimit-Reset` — unix seconds when the window resets

On 429 the `Retry-After` header is set. Default ceilings: 300 reads / minute,
60 writes / minute, per API key.


For more information, please visit [https://public-api-docs.armadadelivery.com](https://public-api-docs.armadadelivery.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branchInput = new \Armada\SDK\Generated\Model\BranchInput(); // \Armada\SDK\Generated\Model\BranchInput

try {
    $result = $apiInstance->createBranch($branchInput);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->createBranch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sandbox.api.armadadelivery.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BranchesApi* | [**createBranch**](docs/Api/BranchesApi.md#createbranch) | **POST** /v2/branches | Create a branch
*BranchesApi* | [**deleteBranch**](docs/Api/BranchesApi.md#deletebranch) | **DELETE** /v2/branches/{id} | Delete a branch
*BranchesApi* | [**getBranch**](docs/Api/BranchesApi.md#getbranch) | **GET** /v2/branches/{id} | Get a branch
*BranchesApi* | [**listBranches**](docs/Api/BranchesApi.md#listbranches) | **GET** /v2/branches | List branches
*BranchesApi* | [**updateBranch**](docs/Api/BranchesApi.md#updatebranch) | **PUT** /v2/branches/{id} | Update a branch
*DeliveriesApi* | [**cancelDelivery**](docs/Api/DeliveriesApi.md#canceldelivery) | **POST** /v2/deliveries/{id}/cancel | Cancel a delivery
*DeliveriesApi* | [**createDelivery**](docs/Api/DeliveriesApi.md#createdelivery) | **POST** /v2/deliveries | Create a delivery
*DeliveriesApi* | [**estimateDelivery**](docs/Api/DeliveriesApi.md#estimatedelivery) | **POST** /v2/deliveries/estimate | Estimate a delivery fee
*DeliveriesApi* | [**estimateDeliveryStatic**](docs/Api/DeliveriesApi.md#estimatedeliverystatic) | **POST** /v2/deliveries/estimate/static | Estimate a delivery fee using static pricing (no live traffic).
*DeliveriesApi* | [**getDelivery**](docs/Api/DeliveriesApi.md#getdelivery) | **GET** /v2/deliveries/{id} | Retrieve a delivery
*DeliveriesApi* | [**retryDelivery**](docs/Api/DeliveriesApi.md#retrydelivery) | **POST** /v2/deliveries/{id}/retry | Retry a failed delivery
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /v2/invoices/{id} | Get an invoice
*InvoicesApi* | [**listInvoices**](docs/Api/InvoicesApi.md#listinvoices) | **GET** /v2/invoices | List invoices
*WalletApi* | [**getWallet**](docs/Api/WalletApi.md#getwallet) | **GET** /v2/wallet | Get wallet balance

## Models

- [Branch](docs/Model/Branch.md)
- [BranchInput](docs/Model/BranchInput.md)
- [BranchInputLocation](docs/Model/BranchInputLocation.md)
- [BranchOrigin](docs/Model/BranchOrigin.md)
- [CancelDeliveryRequest](docs/Model/CancelDeliveryRequest.md)
- [Delivery](docs/Model/Delivery.md)
- [DeliveryCustomer](docs/Model/DeliveryCustomer.md)
- [DeliveryDriver](docs/Model/DeliveryDriver.md)
- [DeliveryLogistics](docs/Model/DeliveryLogistics.md)
- [DeliveryRequest](docs/Model/DeliveryRequest.md)
- [DeliveryRequestDestination](docs/Model/DeliveryRequestDestination.md)
- [DeliveryRequestOrigin](docs/Model/DeliveryRequestOrigin.md)
- [Error](docs/Model/Error.md)
- [Estimate](docs/Model/Estimate.md)
- [EstimateRequest](docs/Model/EstimateRequest.md)
- [Invoice](docs/Model/Invoice.md)
- [KsaAddress](docs/Model/KsaAddress.md)
- [KsaShortAddress](docs/Model/KsaShortAddress.md)
- [KuwaitAddress](docs/Model/KuwaitAddress.md)
- [ListBranches200Response](docs/Model/ListBranches200Response.md)
- [ListInvoices200Response](docs/Model/ListInvoices200Response.md)
- [LocationAddress](docs/Model/LocationAddress.md)
- [Payment](docs/Model/Payment.md)
- [Wallet](docs/Model/Wallet.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@armadadelivery.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
