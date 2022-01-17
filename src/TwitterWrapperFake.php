<?php

namespace LaravelApi\Twitter;

use PHPUnit\Framework\Assert;

class TwitterWrapperFake
{
    private array $sentTweets = [];

    public function tweet(string $status): ?array
    {
        $this->sentTweets[] = $status;

        return [
            'status' => $status,
        ];
    }

    public function assertTweetSent(string $status): self
    {
        Assert::assertContains($status, $this->sentTweets);

        return $this;
    }

    public function assertNoTweetsSent(): self
    {
        Assert::assertEmpty($this->sentTweets);

        return $this;
    }
}
