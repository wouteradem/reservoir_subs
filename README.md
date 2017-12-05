# SwaggerClient-php
This is Acquia Site Factory API described in Swagger format.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://alexku-eval-test.apigee.net/acsf-proxy/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CollectionApi* | [**collectionsCollectionIdGet**](docs/Api/CollectionApi.md#collectionscollectionidget) | **GET** /collections/{collection_id} | Get detailed information about a site collection.
*CollectionApi* | [**collectionsGet**](docs/Api/CollectionApi.md#collectionsget) | **GET** /collections | Gets a list of site collections
*GroupApi* | [**groupsGet**](docs/Api/GroupApi.md#groupsget) | **GET** /groups | Get a list of groups.
*GroupApi* | [**groupsGroupIdGet**](docs/Api/GroupApi.md#groupsgroupidget) | **GET** /groups/{group_id} | Get a group by group ID.
*SiteApi* | [**sitesGet**](docs/Api/SiteApi.md#sitesget) | **GET** /sites | Gets a list of sites
*SiteApi* | [**sitesSiteIdGet**](docs/Api/SiteApi.md#sitessiteidget) | **GET** /sites/{site_id} | Get detailed information about a site.


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [Collection](docs/Model/Collection.md)
 - [CollectionDetails](docs/Model/CollectionDetails.md)
 - [CollectionsResponse](docs/Model/CollectionsResponse.md)
 - [Group](docs/Model/Group.md)
 - [GroupsResponse](docs/Model/GroupsResponse.md)
 - [Site](docs/Model/Site.md)
 - [SiteDetails](docs/Model/SiteDetails.md)
 - [SitesResponse](docs/Model/SitesResponse.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

apiteam@swagger.io


