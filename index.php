<?php

use Swoole\Coroutine;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;
use yxorP\Inc\Shared;

$GLOBALS['PLUGIN_DIR'] = __DIR__;

require $GLOBALS['PLUGIN_DIR'] . '/yxorP.php';
require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/cache/State.php';
require $GLOBALS['PLUGIN_DIR'] . '/cache/Check.php';

if (!class_exists('Swoole\Coroutine')) {
    echo yxorP::Proxy($_SERVER);
} else {

    Coroutine::set([
        'trace_flags' => SWOOLE_TRACE_HTTP2,
        'log_level' => 1,
    ]);

    $http = new Server("192.168.1.34", 9501);

    $http->set([
        'open_http2_protocol' => 1,
        'enable_static_handler' => TRUE,
        'document_root' => dirname(__DIR__),
    ]);

    $http->on('request', function (Request $request, Response $response) {
        $response->end(yxorP::Proxy(['SERVER_NAME' => $request->header->host, 'HTTP_HOST' => $request->header->host, 'REQUEST_URI' => $request->server->request_uri]));
    });

    $http->start();
}