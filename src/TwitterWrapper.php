<?php

namespace Laravapi\Twitter;

class TwitterWrapper
{
    public function neededCredentials()
    {
        return [
            'TWITTER_CONSUMER_KEY' => 'Some description',
            'TWITTER_CONSUMER_SECRET' => 'Some description',
            'TWITTER_ACCESS_TOKEN' => 'Some description',
            'TWITTER_ACCESS_TOKEN_SECRET' => 'Some description',
        ];
    }

    public function config()
    {
        return [
            'TWITTER_CONSUMER_KEY' => 'services.twitter.consumer-key',
            'TWITTER_CONSUMER_SECRET' => 'services.twitter.consumer-secret',
        ];
    }

    /**
     * @method tweet Tweet a tweet
     * @method follower Get followers
     */
    public function tweet($a, $b)
    {
        dump($a);
        dump($b);
    }

    public function testTweet()
    {

    }
}
