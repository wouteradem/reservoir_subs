# Swagger\Client\SiteApi

All URIs are relative to *https://alexku-eval-test.apigee.net/acsf-proxy/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesGet**](SiteApi.md#sitesGet) | **GET** /sites | Gets a list of sites
[**sitesSiteIdGet**](SiteApi.md#sitesSiteIdGet) | **GET** /sites/{site_id} | Get detailed information about a site.


# **sitesGet**
> \Swagger\Client\Model\SitesResponse sitesGet($limit)

Gets a list of sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\SiteApi();
$limit = 10; // int | How many sites to return. A positive integer (max 100).

try {
    $result = $api_instance->sitesGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many sites to return. A positive integer (max 100). | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\SitesResponse**](../Model/SitesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitesSiteIdGet**
> \Swagger\Client\Model\SiteDetails sitesSiteIdGet($site_id)

Get detailed information about a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\SiteApi();
$site_id = 789; // int | Site ID.

try {
    $result = $api_instance->sitesSiteIdGet($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesSiteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **int**| Site ID. |

### Return type

[**\Swagger\Client\Model\SiteDetails**](../Model/SiteDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

