# Laravel Girlfriend

This is a package to managing your love with laravel helpers.

## Installation

Require this package with composer package manager.

```shell
composer require muath-ye/laravel-girlfriend
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
Muathye\Girlfriend\ServiceProvider::class,
```

## Usage

Let your girlfriend creates helpers.php file in your resources directory by using this command line:

```php
php artisan girlfriend:kissme
```

You will find resources/helpers.php file, your are free to update the file by your own needs.

That is it.
