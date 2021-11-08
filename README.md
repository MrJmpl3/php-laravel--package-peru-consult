# Laravel package - Peru Consult

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mrjmpl3/laravel-peru-consult.svg?style=flat-square)](https://packagist.org/packages/mrjmpl3/laravel-peru-consult)

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mrjmpl3/laravel-peru-consult/run-tests?label=tests)](https://github.com/mrjmpl3/laravel-peru-consult/actions?query=workflow%3Arun-tests+branch%3Amain)

[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mrjmpl3/laravel-peru-consult/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mrjmpl3/laravel-peru-consult/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)

[![Total Downloads](https://img.shields.io/packagist/dt/mrjmpl3/laravel-peru-consult.svg?style=flat-square)](https://packagist.org/packages/mrjmpl3/laravel-peru-consult)

This package is created using the logic of [https://github.com/giansalex/peru-consult](https://github.com/giansalex/peru-consult) if you want to make a donation or help the developer please do so in that repository

## Installation

You can install the package via composer:

```bash
composer require mrjmpl3/laravel-peru-consult
```


## Usage

```php
$company = \MrJmpl3\LaravelPeruConsult\Facades\Sunat::get(20603682182);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [MrJmpl3](https://github.com/mrjmpl3)
- [giansalex](https://github.com/giansalex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
