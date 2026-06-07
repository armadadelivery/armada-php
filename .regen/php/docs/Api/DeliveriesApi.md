# Armada\SDK\Generated\DeliveriesApi

All URIs are relative to https://sandbox.api.armadadelivery.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelDelivery()**](DeliveriesApi.md#cancelDelivery) | **POST** /v2/deliveries/{id}/cancel | Cancel a delivery |
| [**createDelivery()**](DeliveriesApi.md#createDelivery) | **POST** /v2/deliveries | Create a delivery |
| [**estimateDelivery()**](DeliveriesApi.md#estimateDelivery) | **POST** /v2/deliveries/estimate | Estimate a delivery fee |
| [**estimateDeliveryStatic()**](DeliveriesApi.md#estimateDeliveryStatic) | **POST** /v2/deliveries/estimate/static | Estimate a delivery fee using static pricing (no live traffic). |
| [**getDelivery()**](DeliveriesApi.md#getDelivery) | **GET** /v2/deliveries/{id} | Retrieve a delivery |
| [**retryDelivery()**](DeliveriesApi.md#retryDelivery) | **POST** /v2/deliveries/{id}/retry | Retry a failed delivery |


## `cancelDelivery()`

```php
cancelDelivery($id, $cancelDeliveryRequest): \Armada\SDK\Generated\Model\Delivery
```

Cancel a delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$cancelDeliveryRequest = new \Armada\SDK\Generated\Model\CancelDeliveryRequest(); // \Armada\SDK\Generated\Model\CancelDeliveryRequest

try {
    $result = $apiInstance->cancelDelivery($id, $cancelDeliveryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->cancelDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **cancelDeliveryRequest** | [**\Armada\SDK\Generated\Model\CancelDeliveryRequest**](../Model/CancelDeliveryRequest.md)|  | [optional] |

### Return type

[**\Armada\SDK\Generated\Model\Delivery**](../Model/Delivery.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDelivery()`

```php
createDelivery($deliveryRequest): \Armada\SDK\Generated\Model\Delivery
```

Create a delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deliveryRequest = new \Armada\SDK\Generated\Model\DeliveryRequest(); // \Armada\SDK\Generated\Model\DeliveryRequest

try {
    $result = $apiInstance->createDelivery($deliveryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->createDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deliveryRequest** | [**\Armada\SDK\Generated\Model\DeliveryRequest**](../Model/DeliveryRequest.md)|  | |

### Return type

[**\Armada\SDK\Generated\Model\Delivery**](../Model/Delivery.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateDelivery()`

```php
estimateDelivery($estimateRequest): \Armada\SDK\Generated\Model\Estimate
```

Estimate a delivery fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$estimateRequest = new \Armada\SDK\Generated\Model\EstimateRequest(); // \Armada\SDK\Generated\Model\EstimateRequest

try {
    $result = $apiInstance->estimateDelivery($estimateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->estimateDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **estimateRequest** | [**\Armada\SDK\Generated\Model\EstimateRequest**](../Model/EstimateRequest.md)|  | |

### Return type

[**\Armada\SDK\Generated\Model\Estimate**](../Model/Estimate.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateDeliveryStatic()`

```php
estimateDeliveryStatic($estimateRequest): \Armada\SDK\Generated\Model\Estimate
```

Estimate a delivery fee using static pricing (no live traffic).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$estimateRequest = new \Armada\SDK\Generated\Model\EstimateRequest(); // \Armada\SDK\Generated\Model\EstimateRequest

try {
    $result = $apiInstance->estimateDeliveryStatic($estimateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->estimateDeliveryStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **estimateRequest** | [**\Armada\SDK\Generated\Model\EstimateRequest**](../Model/EstimateRequest.md)|  | |

### Return type

[**\Armada\SDK\Generated\Model\Estimate**](../Model/Estimate.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDelivery()`

```php
getDelivery($id): \Armada\SDK\Generated\Model\Delivery
```

Retrieve a delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->getDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Armada\SDK\Generated\Model\Delivery**](../Model/Delivery.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryDelivery()`

```php
retryDelivery($id): \Armada\SDK\Generated\Model\Delivery
```

Retry a failed delivery

Retries a delivery that reached the `failed` terminal state. Resets the dispatcher trial counter and re-enqueues the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Armada\SDK\Generated\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Armada\SDK\Generated\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->retryDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->retryDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Armada\SDK\Generated\Model\Delivery**](../Model/Delivery.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
