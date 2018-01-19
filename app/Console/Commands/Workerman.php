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
        $gateway = new Gateway("Websocket://0.0.0.0:8010");
        $gateway->name = 'ChatGateway';
        $gateway->count = 4;
        $gateway->lanIp = '192.168.1.251';
        $gateway->startPort = 2000;
        $gateway->registerAddress = '192.168.1.251:1236';
        if(!defined('GLOBAL_START'))
        {
            Worker::runAll();
        }
    }
}
