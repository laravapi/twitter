<?php

namespace Laravapi\Twitter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravapi\Twitter\Twitter
 */
class Twitter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'twitter';
    }
}
