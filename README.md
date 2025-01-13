# Get the Modification Date and Time of a View

This package provides functionality to retrieve the modification date and time of a view.

## Installation

The package can be installed via composer and requires PHP 8.2+:

```bash
composer require poldixd/laravel-view-modify-date
```

## Usage

```php
use poldixd\ViewModifyDate\ViewModifyDate;

$carbonInstance = ViewModifyDate::get('subfolder.show');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.