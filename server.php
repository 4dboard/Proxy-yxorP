<?php
Swoole\Coroutine::set([
    'trace_flags' => SWOOLE_TRACE_HTTP2,
    'log_level' => 0,
]);
$http = new Swoole\Http\Server("192.168.1.34", 9501, SWOOLE_BASE, SWOOLE_SOCK_TCP);
$http->set([
    'open_http2_protocol' => 1,
    'enable_static_handler' => TRUE,
    'document_root' => dirname(__DIR__),
]);


$http->on('request', function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
    $response->header('Test-Value', [
        "a\r\n",
        'd5678',
        "e  \n ",
        null,
        5678,
        3.1415926,
    ]);
    if (!\class_exists('yxorP')) {

        $_request = [
            'HTTP_HOST' => $request->header->host,
            'REQUEST_URI' => $request->server->request_uri
        ];
        require('yxorP.php');

        $response->end(yxorP::Proxy($_request));

    }
});

$http->start();
