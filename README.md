# Block-Based Page Builder Skeleton for your Filament Apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/Z3d0X/filament-fabricator.svg?style=for-the-badge)](https://packagist.org/packages/Z3d0X/filament-fabricator)
[![Total Downloads](https://img.shields.io/packagist/dt/Z3d0X/filament-fabricator.svg?style=for-the-badge)](https://packagist.org/packages/Z3d0X/filament-fabricator)

<p align="center">
  <img alt="fabricator banner" src="https://raw.githubusercontent.com/Z3d0X/filament-fabricator/2.x/art/banner.jpg" />
</p>

***What is Filament Fabricator?*** Filament Fabricator is simply said a block-based page builder skeleton. Filament Fabricator takes care of the PageResource & frontend routing, so you can focus on what really matters: your [Layouts](https://filamentphp.com/plugins/Z3d0X-fabricator#layouts) & [Page Blocks](https://filamentphp.com/plugins/Z3d0X-fabricator#page-blocks).

## Compatibility
| Fabricator | Filament | PHP |
|------|----------|--------|
| [1.x](https://github.com/Z3d0X/filament-fabricator/tree/1.x) | ^2.0 | ^8.0 |
| [2.x](https://github.com/Z3d0X/filament-fabricator/tree/2.x) | ^3.0 | ^8.1 |

## Installation

You can install the package via composer:

```bash
composer require Z3d0X/filament-fabricator
```


After that run the install command:
```bash
php artisan filament-fabricator:install
```

Register a `FilamentFabricatorPlugin` instance in your Panel provider:

```php
use Z3d0X\FilamentFabricator\FilamentFabricatorPlugin;

//..

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            FilamentFabricatorPlugin::make(),
        ]);
}
```

Then, publish the registered plugin assets:

```
php artisan filament:assets
```

## Documentation

Documentation can be viewed at: https://filamentphp.com/plugins/Z3d0X-fabricator

## Screenshots

<img alt="fabricator-index" src="https://raw.githubusercontent.com/Z3d0X/filament-fabricator/2.x/art/list-screenshot.png">
<img alt="fabricator-edit-1" src="https://raw.githubusercontent.com/Z3d0X/filament-fabricator/2.x/art/edit-screenshot-1.png">
<img alt="fabricator-edit-2" src="https://raw.githubusercontent.com/Z3d0X/filament-fabricator/2.x/art/edit-screenshot-2.png">

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ziyaan Hassan](https://github.com/Z3d0X)
- [Patrick Boivin](https://github.com/pboivin) - Filament Peek
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
