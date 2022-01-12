<?php

namespace Laravapi\Twitter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Laravapi\Twitter\Commands\TwitterCommand;

class TwitterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('twitter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_twitter_table')
            ->hasCommand(TwitterCommand::class);
    }
}
