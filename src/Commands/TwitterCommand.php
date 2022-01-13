<?php

namespace LaravelApi\Twitter\Commands;

use Illuminate\Console\Command;

class TwitterCommand extends Command
{
    public $signature = 'twitter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
