![Safe input by default](https://user-images.githubusercontent.com/37669560/176688983-0dacba26-c133-45ba-aa9d-f6c695fd903c.png)

# Laravel Safe Request
[![Latest Version on Packagist](https://img.shields.io/packagist/v/michael-rubel/laravel-safe-request.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/michael-rubel/laravel-safe-request)
[![Total Downloads](https://img.shields.io/packagist/dt/michael-rubel/laravel-safe-request.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/michael-rubel/laravel-safe-request)
[![Code Quality](https://img.shields.io/scrutinizer/quality/g/michael-rubel/laravel-safe-request.svg?style=flat-square&logo=scrutinizer)](https://scrutinizer-ci.com/g/michael-rubel/laravel-safe-request/?branch=main)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/michael-rubel/laravel-safe-request.svg?style=flat-square&logo=scrutinizer)](https://scrutinizer-ci.com/g/michael-rubel/laravel-safe-request/?branch=main)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/michael-rubel/laravel-safe-request/run-tests.yml?branch=main&style=flat-square&label=tests&logo=github)](https://github.com/michael-rubel/laravel-safe-request/actions)
[![PHPStan](https://img.shields.io/github/actions/workflow/status/michael-rubel/laravel-safe-request/phpstan.yml?branch=main&style=flat-square&label=larastan&logo=laravel)](https://github.com/michael-rubel/laravel-safe-request/actions)

Makes your FormRequest keys retrieved from `$request->safe()` method by default to prevent retrieval of unvalidated input values.

---

The package requires `PHP 8` or higher and `Laravel 9` or higher.

## #StandWithUkraine
[![SWUbanner](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

## Installation
Install the package using composer:
```bash
composer require michael-rubel/laravel-safe-request
```

## Usage
Apply trait for your base Form Request in Laravel:
```php
use RetrievesSafeInput;
```

Any value accessed by the magic method (like `$request->key`) now will be retrieved from the `$request->safe()`.

## Testing
```bash
composer test
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
