# My Test Package

[![Build Status](https://travis-ci.org/csoseman/my-test-package.svg?branch=master)](https://travis-ci.org/csoseman/my-test-package)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/csoseman/my-test-package/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/csoseman/my-test-package/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/csoseman/my-test-package/badge.svg?branch=master)](https://coveralls.io/github/csoseman/my-test-package?branch=master)

[![Packagist](https://img.shields.io/packagist/v/csoseman/my-test-package.svg)](https://packagist.org/packages/csoseman/my-test-package)
[![Packagist](https://poser.pugx.org/csoseman/my-test-package/d/total.svg)](https://packagist.org/packages/csoseman/my-test-package)
[![Packagist](https://img.shields.io/packagist/l/csoseman/my-test-package.svg)](https://packagist.org/packages/csoseman/my-test-package)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require csoseman/my-test-package
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Csoseman\MyTestPackage\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Csoseman\MyTestPackage\Facades\MyTestPackage::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Csoseman\MyTestPackage\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/csoseman/my-test-package)
- [All contributors](https://github.com/csoseman/my-test-package/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
