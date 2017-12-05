# Swagger\Client\CollectionApi

All URIs are relative to *https://alexku-eval-test.apigee.net/acsf-proxy/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**collectionsCollectionIdGet**](CollectionApi.md#collectionsCollectionIdGet) | **GET** /collections/{collection_id} | Get detailed information about a site collection.
[**collectionsGet**](CollectionApi.md#collectionsGet) | **GET** /collections | Gets a list of site collections


# **collectionsCollectionIdGet**
> \Swagger\Client\Model\CollectionDetails collectionsCollectionIdGet($collection_id)

Get detailed information about a site collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CollectionApi();
$collection_id = 56; // int | Collection ID.

try {
    $result = $api_instance->collectionsCollectionIdGet($collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->collectionsCollectionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id** | **int**| Collection ID. |

### Return type

[**\Swagger\Client\Model\CollectionDetails**](../Model/CollectionDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **collectionsGet**
> \Swagger\Client\Model\CollectionsResponse collectionsGet($limit, $page)

Gets a list of site collections

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CollectionApi();
$limit = 10; // int | How many collections to return. A positive integer (max 100).
$page = 1; // int | Which page to return.

try {
    $result = $api_instance->collectionsGet($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->collectionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many collections to return. A positive integer (max 100). | [optional] [default to 10]
 **page** | **int**| Which page to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\CollectionsResponse**](../Model/CollectionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

