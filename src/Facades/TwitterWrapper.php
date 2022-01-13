<?php

namespace LaravelApi\Twitter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelApi\Twitter\Twitter
 */
class TwitterWrapper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelApi\Twitter\TwitterWrapper::class;
    }
}
