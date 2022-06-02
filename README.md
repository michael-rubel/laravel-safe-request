![Laravel Helpful Traits](https://user-images.githubusercontent.com/37669560/171641331-cf9599fa-1b4b-48ad-97e9-f04cd41cd977.png)

# Laravel Helpful Traits
[![Latest Version on Packagist](https://img.shields.io/packagist/v/michael-rubel/laravel-helpful-traits.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/michael-rubel/laravel-helpful-traits)
[![Total Downloads](https://img.shields.io/packagist/dt/michael-rubel/laravel-helpful-traits.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/michael-rubel/laravel-helpful-traits)
[![Code Quality](https://img.shields.io/scrutinizer/quality/g/michael-rubel/laravel-helpful-traits.svg?style=flat-square&logo=scrutinizer)](https://scrutinizer-ci.com/g/michael-rubel/laravel-helpful-traits/?branch=main)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/michael-rubel/laravel-helpful-traits.svg?style=flat-square&logo=scrutinizer)](https://scrutinizer-ci.com/g/michael-rubel/laravel-helpful-traits/?branch=main)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/michael-rubel/laravel-helpful-traits/run-tests/main?style=flat-square&label=tests&logo=github)](https://github.com/michael-rubel/laravel-helpful-traits/actions)
[![PHPStan](https://img.shields.io/github/workflow/status/michael-rubel/laravel-helpful-traits/phpstan/main?style=flat-square&label=larastan&logo=laravel)](https://github.com/michael-rubel/laravel-helpful-traits/actions)

Useful traits you may include in your Laravel application.

---

The package requires PHP `^8.x` and Laravel `^8.71` or `^9.0`.

## #StandWithUkraine
[![SWUbanner](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

## Traits available
- [RetrievesSafeInput](https://github.com/michael-rubel/laravel-helpful-traits/blob/main/src/Traits/RetrievesSafeInput.php) for Form Requests

## Installation
Install the package using composer:
```bash
composer require michael-rubel/laravel-helpful-traits
```

## Usage
You can apply trait for your Form Request in Laravel:
```php
use RetrievesSafeInput;

// From now any `$request->yourKey` will be retrieved from `$request()->safe()` instead of `$request->all()` be default.
```

## Testing
```bash
composer test
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
