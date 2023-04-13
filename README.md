# Laravel Form Components

Use Blade components to build forms with Bootstrap. 

## Requirements
- PHP 8.1+ or higher
- Laravel 8.0 or 9.0

## Installation

You can install the package via composer:

```sh
composer vaix-dungpx/laravel-form-components
```

Publish the configuration file and Blade views with the following command:

```sh
php artisan vendor:publish --provider="TysonLaravel\FormComponents\FormComponentServiceProvider"
```

## Quick example
```blade
<x-form::open :action="route(STORE_PRODUCT)">

    <!-- Input only --->
    <x-form::input name="name" :value="old('name')" required/>

    <!-- With group & label --->
    <x-form::group :label="trans('product.code')">
        <x-form::input name="code" :value="old('code')"/>
    </x-form::group>
    
</x-form::open>
```
## Usage


