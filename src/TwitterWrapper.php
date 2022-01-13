<?php

namespace LaravelApi\Twitter;

use Abraham\TwitterOAuth\TwitterOAuth;
use LaravelApi\LaravelApi\WrapperInterface;

class TwitterWrapper implements WrapperInterface
{
    public function boot(): void
    {
        app()->singleton(TwitterOAuth::class, function(): TwitterOAuth {
            return new TwitterOAuth(
                (string) config('services.twitter.consumer-key'),
                (string) config('services.twitter.consumer-secret'),
                (string) config('services.twitter.access-token'),
                (string) config('services.twitter.access-token-secret')
            );
        });
    }

    public function config(): array
    {
        return [
            'TWITTER_CONSUMER_KEY' => [
                'config' => 'services.twitter.consumer-key',
                'description' => 'Description for config key 1',
            ],
            'TWITTER_CONSUMER_SECRET' => [
                'config' => 'services.twitter.consumer-secret',
                'description' => 'Description for config key 2',
            ],
            'TWITTER_ACCESS_TOKEN' => [
                'config' => 'services.twitter.access-token',
                'description' => 'Description for config key 2',
            ],
            'TWITTER_ACCESS_TOKEN_SECRET' => [
                'config' => 'services.twitter.access-token-secret',
                'description' => 'Description for config key 2',
            ],
        ];
    }

    public function __call(string $name, array $arguments)
    {
       return app(TwitterOAuth::class)->$name(...$arguments);
    }

    public function tweet(string $status): object|array
    {
        return app(TwitterOAuth::class)->post("statuses/update", ["status" => $status]);
    }

}
