<?php

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

require 'yxorP.php';

if (!class_exists('Swoole\HTTP\Server')) {
    echo (new yxorP())->Proxy($_SERVER);
} else {

    $server = new Swoole\HTTP\Server('0.0.0.0', 9501);

    $server->on("Start", function (Server $server) {
        new yxorP();
    });

    $server->on("Request", function (Request $request, Response $response) {

        new yxorP();
        $_result = yxorP::Proxy(['SERVER_NAME' => $request->header->host, 'HTTP_HOST' => $request->header->host, 'REQUEST_URI' => $request->server->request_uri]);
        $response->end($_result);
    });

    $server->start();

}
