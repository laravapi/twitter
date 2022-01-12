<?php

namespace Laravapi\Twitter;

class TwitterWrapper
{
    public function test()
    {
        return 234;
    }

    public function neededCredentials()
    {
        return [
            'TWITTER_CONSUMER_KEY' => 'Some description',
            'TWITTER_CONSUMER_SECRET' => 'Some description',
            'TWITTER_ACCESS_TOKEN' => 'Some description',
            'TWITTER_ACCESS_TOKEN_SECRET' => 'Some description',
        ];
    }
}
