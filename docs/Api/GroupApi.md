# Swagger\Client\GroupApi

All URIs are relative to *https://alexku-eval-test.apigee.net/acsf-proxy/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsGet**](GroupApi.md#groupsGet) | **GET** /groups | Get a list of groups.
[**groupsGroupIdGet**](GroupApi.md#groupsGroupIdGet) | **GET** /groups/{group_id} | Get a group by group ID.


# **groupsGet**
> \Swagger\Client\Model\GroupsResponse groupsGet($limit, $page)

Get a list of groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GroupApi();
$limit = 10; // int | How many items to return. A positive integer (max 100).
$page = 1; // int | Which page to return.

try {
    $result = $api_instance->groupsGet($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many items to return. A positive integer (max 100). | [optional] [default to 10]
 **page** | **int**| Which page to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\GroupsResponse**](../Model/GroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGroupIdGet**
> \Swagger\Client\Model\Group groupsGroupIdGet($group_id)

Get a group by group ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GroupApi();
$group_id = 56; // int | Group ID.

try {
    $result = $api_instance->groupsGroupIdGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID. |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

