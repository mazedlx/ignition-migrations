## Using this skeleton (remove this section after you have completed these steps)

First clone this repo to your development machine and remove the `.git` directory. Next run `git init` to create another repo. Create a new repo on GitHub (or another source control saas) and point the origin remote of your cloned repo to the one you just created. Here's an example: `git remote add origin git@github.com:facade/newly-created-repo.git`. Commit all files and push to master.

Next replace these variables in all files of the project and delete this paragraph:

Next run `composer install`, `yarn` and `yarn production`.

To use the tab in a Laravel app add this line in the `require` section of `composer.json`.

```
   "mazedlx/ignition-migrations": "*",
```

In your Laravel app add a `repositiories` section to the `composer.json` with the path to your package repo.

```
    "repositories": [
        {
            "type": "path",
            "url": "../your-new-package-repo"
        }
    ]
```

Now you're ready to develop your package inside a Laravel app.

**When you are done with the steps above delete everything above!**

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
