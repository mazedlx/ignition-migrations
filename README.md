# An igintion package to show your migrations and their status.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mazedlx/ignition-migrations.svg?style=flat-square)](https://packagist.org/packages/mazedlx/ignition-migrations)
[![Build Status](https://img.shields.io/travis/mazedlx/ignition-migrations/master.svg?style=flat-square)](https://travis-ci.org/mazedlx/ignition-migrations)
[![Quality Score](https://img.shields.io/scrutinizer/g/mazedlx/ignition-migrations.svg?style=flat-square)](https://scrutinizer-ci.com/g/mazedlx/ignition-migrations)
[![Total Downloads](https://img.shields.io/packagist/dt/mazedlx/ignition-migrations.svg?style=flat-square)](https://packagist.org/packages/mazedlx/ignition-migrations)

This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tab here.

## Installation

You can install the package in to a Laravel app that uses [Ignition](https://flareapp.io) via composer:

```bash
composer require mazedlx/ignition-migrations
```

Then add the Migrations tab to your Ignition tabs e.g. in your `AppServiceProvider`:

```php
/**
 * Bootstrap any application services.
 *
 * @return void
    */
public function boot()
{
    Ignition::tab(new MigrationsTab);
}
```

## Usage

Click on the "Migrations" tab on your Ignition screen to see the tool provided by this package.

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mazedlx@gmail.com instead of using the issue tracker.

## Credits

-   [Christian Leo-Pernold](https://github.com/mazedlx)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
