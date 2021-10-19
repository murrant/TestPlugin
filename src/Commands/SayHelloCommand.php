<?php

namespace LibreNMS\TestPlugin\Commands;

use App\Console\LnmsCommand;

class SayHelloCommand extends LnmsCommand
{
    protected $name = 'test-plugin:hello';

    public function handle()
    {
        $this->info('Hello from Test Plugin');

        return 0;
    }
}
