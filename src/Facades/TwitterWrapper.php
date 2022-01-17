<?php

namespace LaravelApi\Twitter\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelApi\Twitter\TwitterWrapperFake;

/**
 * @see \LaravelApi\Twitter\Twitter
 */
class TwitterWrapper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelApi\Twitter\TwitterWrapper::class;
    }

    public static function fake(): TwitterWrapperFake
    {
        static::swap($fake = new TwitterWrapperFake());

        return $fake;
    }
}
