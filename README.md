# Doluna API SMS Sender Package

[![Build Status](https://travis-ci.org/spitoglou/doluna-sms.svg?branch=master)](https://travis-ci.org/spitoglou/doluna-sms)
[![GitHub license](https://img.shields.io/github/license/spitoglou/doluna-sms.svg)]()
[![GitHub release](https://img.shields.io/github/release/spitoglou/doluna-sms.svg)]()
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spitoglou/doluna-sms/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spitoglou/doluna-sms/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/spitoglou/doluna-sms/version)](https://packagist.org/packages/spitoglou/doluna-sms)
[![Latest Unstable Version](https://poser.pugx.org/spitoglou/doluna-sms/v/unstable)](//packagist.org/packages/spitoglou/doluna-sms)
[![Total Downloads](https://poser.pugx.org/spitoglou/doluna-sms/downloads)](https://packagist.org/packages/spitoglou/doluna-sms)


> **This is a package for sending SMS messages utilizing the Doluna SMS service API.**

## Requirements

- PHP >=5.5.9

## Installation

Require this package with composer:
(to be completed when this will be published)

```
composer require spitoglou/doluna-sms
```

After updating composer, add the ServiceProvider to the providers array in config/app.php

```
'providers' => [
	//	...
	Spitoglou\SMS\SMSServiceProvider::class,
]
```

Copy the package config to your local config with the publish command:

```
php artisan vendor:publish
```

## Usage

Example of quick (and a little *dirty*) implementation, right from a route closure:
```php
Route::get('smsSend/{message}', function ($message) {
    $recipient = new \Spitoglou\SMS\SMSRecipient('306973######'); //12 digit international number here (30 stands for Greece etc.)
    return \Spitoglou\SMS\SMSClass::SMSSend($recipient, $message);
});
```

## Configurations

Edit ``sms.php``  in the ``app/config`` directory for more configurations.

```php
/*
     |--------------------------------------------------------------------------
     | API KEY
     |--------------------------------------------------------------------------
     |
     | You will need to provide here the API key that you can generate from
     | the Doluna site, after you have registered.
     |
     */
    
    'dolunaAPIKey' => 'YourApiKeyHere',

```


## License

Doluna-SMS is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2015 **Stavros Pitoglou**

