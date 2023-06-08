
# Getting Started with WhatsApp Cloud API

## Introduction

Welcome to the WhatsApp API from Meta.

Individual developers and existing Business Service Providers (BSPs) can now send and receive messages via the WhatsApp API using a cloud-hosted version of the WhatsApp Business API. Compared to the previous solutions, the cloud-based WhatsApp API is simpler to use and is a more cost-effective way for businesses to use WhatsApp. Please keep in mind the following configurations:

| Name | Description |
| --- | --- |
| Version | Latest [Graph API version](https://developers.facebook.com/docs/graph-api/). For example: v13.0 |
| User-Access-Token | Your user access token after signing up at [developers.facebook.com](https://developers.facebook.com). |
| WABA-ID | Your WhatsApp Business Account (WABA) ID. |
| Phone-Number-ID | ID for the phone number connected to the WhatsApp Business API. You can get this with a [Get Phone Number ID request](3184f675-d289-46f1-88e5-e2b11549c418). |
| Business-ID | Your Business' ID. Once you have your Phone-Number-ID, make a [Get Business Profile request](#99fd3743-46cf-46c4-95b5-431c6a4eb0b0) to get your Business' ID. |
| Recipient-Phone-Number | Phone number that you want to send a WhatsApp message to. |
| Media-ID | ID for the media to [send a media message](#0a632754-3788-43bf-b785-ac6a73423d5a) or [media template message](#439c926a-8a6c-4972-ab2c-d99297716da9) to your customers. |
| Media-URL | URL for the media to [download media content](#cbe5ece3-246c-48f3-b338-074187dfef66). |

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "sdksio/whatsapp-cloud-api-sdk:1.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "sdksio/whatsapp-cloud-api-sdk": "1.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/sdksio/whatsapp-cloud-api-sdk#1.0.0

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `version` | `string` | *Default*: `'v13.0'` |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `accessToken` | `string` | The OAuth 2.0 Access Token to use for API requests. |

The API client can be initialized as follows:

```php
$client = WhatsAppCloudAPIClientBuilder::init()
    ->accessToken('AccessToken')
    ->environment('production')
    ->version('v13.0')
    ->build();
```

## Authorization

This API uses `OAuth 2 Bearer token`.

## List of APIs

* [Business Profiles](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/business-profiles.md)
* [Phone Numbers](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/phone-numbers.md)
* [Two-Step Verification](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/two-step-verification.md)
* [Messages](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/messages.md)
* [Registration](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/registration.md)
* [Media](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/controllers/media.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/whatsapp-cloud-api-php-sdk/tree/1.0.0/doc/http-response.md)

