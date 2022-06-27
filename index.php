<?php
/*
use Swoole\Database\PDOConfig;
use Swoole\Database\PDOPool;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;
use Swoole\Runtime;
*/
require 'yxorP.php';

yxorP::Proxy($_SERVER);
/*
if (!class_exists('Swoole\HTTP\Server')) {
    yxorP::Proxy($_SERVER);
} else {
    (new Swoole\HTTP\Server('0.0.0.0', 9501))->on("Request", function (Request $request, Response $response) {
        $response->end(yxorP::Proxy(['SERVER_NAME' => $request->header->host, 'HTTP_HOST' => $request->header->host, 'REQUEST_URI' => $request->server->request_uri]));
    })->start();
}
*/
