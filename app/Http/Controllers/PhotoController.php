<?php

namespace App\Http\Controllers;


use GatewayWorker\Lib\Gateway;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photos()
    {
        Gateway::$registerAddress = '192.168.1.251:1238';
        Gateway::sendToAll('11111');
    }
}
