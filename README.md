# laravel-unique-slug-generator
## Require PHP version:
```php
 "php": "^8.1"
```
## Installation
```sh
composer require mustafiz/laravel-unique-slug
```

## use controller
### Import first the UniqueSlug facade
```php
use Mustafiz\LaravelUniqueSlug\Facades\UniqueSlug;
```
```php
UniqueSlug::generate('test data one')
```
### Output
test-data-one

### Publishing Configuration
```sh
 php artisan vendor:publish mustafiz/laravel-unique-slug
```
### contribution
You are open to create any pull request.

Thanks For Viewing.....
