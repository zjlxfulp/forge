<?php

namespace App\Console\Commands;

use GatewayWorker\Gateway;
use Illuminate\Console\Command;
use Workerman\Worker;

class Workerman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workerman:serve {com} {q=-d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'access workerman';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        var_dump($argv);

    }
}
