<?php

use LaravelApi\Twitter\Facades\TwitterWrapper;
use LaravelApi\Twitter\TwitterWrapperFake;

it('switches out api client with fake', function(){

    $this->assertInstanceOf(\LaravelApi\Twitter\TwitterWrapper::class, TwitterWrapper::getFacadeRoot());

    TwitterWrapper::fake();

    $this->assertInstanceOf(TwitterWrapperFake::class, TwitterWrapper::getFacadeRoot());

});

it('asserts no tweet was sent', function () {
    // Arrange
    TwitterWrapper::fake();

    // Assert
    TwitterWrapper::assertNoTweetsSent();
});

it('asserts a specific tweet was sent', function () {
    // Arrange
    TwitterWrapper::fake();

    // Act
    TwitterWrapper::tweet('Test tweet');

    // Assert
    TwitterWrapper::assertTweetSent('Test tweet');
});
