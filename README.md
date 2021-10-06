- [![Starts](https://img.shields.io/github/stars/miladimos/laravel-?style=flat&logo=github)](https://github.com/miladimos/laravel-/forks)
- [![Forks](https://img.shields.io/github/forks/miladimos/laravel-?style=flat&logo=github)](https://github.com/miladimos/laravel-/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/miladimos/laravel-.svg?style=flat-square)](https://packagist.org/packages/miladimos/laravel-)

- [English](README-en.md)

# پکیج لاراولی

یه پکیج خفن

### نصب

1.  برای نصب در مسیر روت پروژه خود دستور زیر را در ریشه پروژه اجرا کنید

```
composer require miladimos/laravel-
```

2. Open your config/app.php and add the following to the providers array:

```php
Miladimos\Package\Providers\PackageServiceProvider::class,
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

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

