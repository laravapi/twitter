<?php

namespace LaravelApi\Twitter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelApi\Twitter\Twitter
 */
class Twitter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'twitter';
    }
}
