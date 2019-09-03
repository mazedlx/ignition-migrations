# An igintion package to show your migrations and their status.

[![Latest Version on Packagist](https://img.shields.io/github/v/release/mazedlx/ignition-migrations?label=packagist)](https://packagist.org/packages/mazedlx/ignition-migrations)
[![Build Status](https://img.shields.io/travis/mazedlx/ignition-migrations/master.svg?style=flat-square)](https://travis-ci.org/mazedlx/ignition-migrations)
[![Total Downloads](https://img.shields.io/packagist/dt/mazedlx/ignition-migrations.svg?style=flat-square)](https://packagist.org/packages/mazedlx/ignition-migrations)
[![License](https://img.shields.io/github/license/mazedlx/ignition-migrations)](https://img.shields.io/github/license/mazedlx/ignition-migrations)

All your migrations at a glance.

![Screenshot](https://raw.githubusercontent.com/mazedlx/ignition-migrations/master/screenshot.png)

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

If you want to change the output style you can

```bash
$ php artisan vendor:publish --provider="Mazedlx\MigrationsTab\TabServiceProvider"
```

which will create `ignition-migrations.php` in your `config` folder.

## Usage

Click on the "Migrations" tab on your Ignition screen to see all your mgirations and call various `php artisan migrate` commands right from your browser.

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
