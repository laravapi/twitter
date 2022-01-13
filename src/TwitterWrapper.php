<?php

namespace Laravapi\Twitter;

use Abraham\TwitterOAuth\TwitterOAuth;

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
            'TWITTER_ACCESS_TOKEN' => 'services.twitter.access-token',
            'TWITTER_ACCESS_TOKEN_SECRET' => 'services.twitter.access-token-secret',
        ];
    }

    public function tweet(string $status)
    {
        dd(app(TwitterOAuth::class)->post("statuses/update", ["status" => $status]));
    }

    public function __call(string $name, array $arguments)
    {
       app(TwitterOAuth::class)->$name(...$arguments);
    }


    public function boot()
    {
//        dd(config('services.twitter'));
        app()->singleton(TwitterOAuth::class, function(): TwitterOAuth {
            return new TwitterOAuth(
                (string) config('services.twitter.consumer_key'),
                (string) config('services.twitter.consumer_secret'),
                (string) config('services.twitter.access_token'),
                (string) config('services.twitter.access_token_secret')
            );
        });
    }
}
