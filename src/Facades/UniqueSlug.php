<?php

namespace Mustafiz\LaravelUniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @see \Mustafiz\LaravelUniqueSlug\UniqueSlug
 */
class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor():string
    {
        return 'laravel-unique-slug';
    }
}
