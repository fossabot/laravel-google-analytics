# Google Analytics for your Laravel application
[![StyleCI](https://github.styleci.io/repos/144772780/shield)](https://github.styleci.io/repos/144772780)
[![Latest Stable Version](https://poser.pugx.org/gonoware/laravel-google-analytics/v/stable?format=flat-square)](https://packagist.org/packages/gonoware/laravel-google-analytics)
[![Latest Unstable Version](https://poser.pugx.org/gonoware/laravel-google-analytics/v/unstable?format=flat-square)](https://packagist.org/packages/gonoware/laravel-google-analytics)
[![License](https://poser.pugx.org/gonoware/laravel-google-analytics/license?format=flat-square)](https://packagist.org/packages/gonoware/laravel-google-analytics)
[![Laravel version](https://img.shields.io/badge/Laravel-^5.5-orange.svg?style=flat-square)](https://laravel.com/docs/5.5)
[![GitHub issues](https://img.shields.io/github/issues/gonoware/laravel-google-analytics.svg?style=flat-square)](https://github.com/gonoware/laravel-google-analytics/issues)
[![Total Downloads](https://poser.pugx.org/gonoware/laravel-google-analytics/downloads?format=flat-square)](https://packagist.org/packages/gonoware/laravel-google-analytics)

Using this package you can easily add Google Analytics to your website.


## Installation
This package can be installed through Composer.
```bash
composer require gonoware/laravel-google-analytics
```
In Laravel 5.5 and above the package will autoregister the service provider. 


Publish the compiled assets to `public/vendor/google-analytics` with this command:
```bash
php artisan vendor:publish --provider="GoNoWare\GoogleAnalytics\GoogleAnalyticsServiceProvider" --tag=public
```


Optionally, you can also publish the config file of this package with this command to `config/vendor/google_analytics.php`:
```bash
php artisan vendor:publish --provider="GoNoWare\GoogleAnalytics\GoogleAnalyticsServiceProvider" --tag=config
```
The config file will be published in .


## Usage
When the installation is done you can include Google Analytics in your Blade files:
```php
@googleanalytics
```
Google Analytics is disabled by default, when `APP_DEBUG=true` isn't defined in the 
`.env` file or `debug` is set to true in `config/app.php`.
You can override the value by setting `GOOGLE_ANALYTICS_ENABLED` to `true` or `false` instead.

You may construct Google Analytics using a boolean expression. When an expression is set
 `GOOGLE_ANALYTICS_ENABLED` will not be used.
```php
@googleanalytics(app()->environment('production'))
```


## Changelog
Detailed changes for each release are documented in the [release notes](https://github.com/gonoware/laravel-google-analytics/releases).


## Contribution
This project exists thanks to [all the people](https://github.com/gonoware/laravel-google-analytics/graphs/contributors) who contribute!


## License
[MIT](https://github.com/gonoware/laravel-google-analytics/blob/master/LICENSE)
 
Copyright (c) 2018-present Go NoWare
 
