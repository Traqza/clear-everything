<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearEverything extends Command
{

    protected $signature = 'traqza:clear-everything';

    protected $description = 'Clears routes, config, cache, views, compiled, and caches config.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $validCommands = array('route:clear', 'config:clear', 'cache:clear', 'view:clear', 'clear-compiled', 'config:cache');
        foreach ($validCommands as $cmd) {
            $this->call('' . $cmd . '');

        }
    }
}
