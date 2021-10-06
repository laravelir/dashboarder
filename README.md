- [![Starts](https://img.shields.io/github/stars/laravelir/dashboarder?style=flat&logo=github)](https://github.com/laravelir/dashboarder/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/dashboarder?style=flat&logo=github)](https://github.com/laravelir/dashboarder/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/laravelir/laravel-.svg?style=flat-square)](https://packagist.org/packages/laravelir/laravel-)


# laravel Package

A package for fun

### Installation

1. Run the command below to add this package:

```
composer require laravelir/dashboarder
```

2. Open your config/app.php and add the following to the providers array:

```php
Laravelir\Dashboarder\Providers\DashboarderServiceProvider::class,
```

3. Run the command below to publish the package config file config/dashboarder.php:

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

- [:miladimos](https://github.com/:miladimos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
