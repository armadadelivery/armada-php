# Armada\SDK\Generated\InvoicesApi

All URIs are relative to https://sandbox.api.armadadelivery.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /v2/invoices/{id} | Get an invoice |
| [**listInvoices()**](InvoicesApi.md#listInvoices) | **GET** /v2/invoices | List invoices |


## `getInvoice()`

```php
getInvoice($id): \Armada\SDK\Generated\Model\Invoice
```

Get an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Armada\SDK\Generated\Model\Invoice**](../Model/Invoice.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($page, $perPage, $status, $periodBegin, $periodEnd): \Armada\SDK\Generated\Model\ListInvoices200Response
```

List invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$perPage = 20; // int
$status = 'all'; // string
$periodBegin = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$periodEnd = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->listInvoices($page, $perPage, $status, $periodBegin, $periodEnd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **perPage** | **int**|  | [optional] [default to 20] |
| **status** | **string**|  | [optional] [default to &#39;all&#39;] |
| **periodBegin** | **\DateTime**|  | [optional] |
| **periodEnd** | **\DateTime**|  | [optional] |

### Return type

[**\Armada\SDK\Generated\Model\ListInvoices200Response**](../Model/ListInvoices200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
