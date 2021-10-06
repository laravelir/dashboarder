- [![Starts](https://img.shields.io/github/stars/miladimos/package-skeleton?style=flat&logo=github)](https://github.com/miladimos/package-skeleton/forks)
- [![Forks](https://img.shields.io/github/forks/miladimos/package-skeleton?style=flat&logo=github)](https://github.com/miladimos/package-skeleton/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/miladimos/laravel-.svg?style=flat-square)](https://packagist.org/packages/miladimos/laravel-)

- [فارسی](README.md)

# laravel Package

A package for fun

### Installation

1. Run the command below to add this package:

```
composer require vendor/package
```

2. Open your config/app.php and add the following to the providers array:

```php
Vendor\Package\Providers\PackageServiceProvider::class,
```

3. Run the command below to publish the package config file config/package.php:

```
php artisan vendor:publish
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

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
