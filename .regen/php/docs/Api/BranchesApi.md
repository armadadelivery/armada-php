# Armada\SDK\Generated\BranchesApi

All URIs are relative to https://sandbox.api.armadadelivery.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBranch()**](BranchesApi.md#createBranch) | **POST** /v2/branches | Create a branch |
| [**deleteBranch()**](BranchesApi.md#deleteBranch) | **DELETE** /v2/branches/{id} | Delete a branch |
| [**getBranch()**](BranchesApi.md#getBranch) | **GET** /v2/branches/{id} | Get a branch |
| [**listBranches()**](BranchesApi.md#listBranches) | **GET** /v2/branches | List branches |
| [**updateBranch()**](BranchesApi.md#updateBranch) | **PUT** /v2/branches/{id} | Update a branch |


## `createBranch()`

```php
createBranch($branchInput): \Armada\SDK\Generated\Model\Branch
```

Create a branch

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **branchInput** | [**\Armada\SDK\Generated\Model\BranchInput**](../Model/BranchInput.md)|  | |

### Return type

[**\Armada\SDK\Generated\Model\Branch**](../Model/Branch.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBranch()`

```php
deleteBranch($id)
```

Delete a branch

### Example

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
$id = 'id_example'; // string

try {
    $apiInstance->deleteBranch($id);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->deleteBranch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBranch()`

```php
getBranch($id): \Armada\SDK\Generated\Model\Branch
```

Get a branch

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBranch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->getBranch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Armada\SDK\Generated\Model\Branch**](../Model/Branch.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBranches()`

```php
listBranches(): \Armada\SDK\Generated\Model\ListBranches200Response
```

List branches

### Example

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

try {
    $result = $apiInstance->listBranches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->listBranches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Armada\SDK\Generated\Model\ListBranches200Response**](../Model/ListBranches200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBranch()`

```php
updateBranch($id, $branchInput): \Armada\SDK\Generated\Model\Branch
```

Update a branch

### Example

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
$id = 'id_example'; // string
$branchInput = new \Armada\SDK\Generated\Model\BranchInput(); // \Armada\SDK\Generated\Model\BranchInput

try {
    $result = $apiInstance->updateBranch($id, $branchInput);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->updateBranch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **branchInput** | [**\Armada\SDK\Generated\Model\BranchInput**](../Model/BranchInput.md)|  | |

### Return type

[**\Armada\SDK\Generated\Model\Branch**](../Model/Branch.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
