<?php namespace yxorP\app\lib\proxy;

use yxorP\app\lib\proxy\psr7;
use yxorP\app\lib\psr\http\message\requestInterface;

class prepareBodyMiddleware
{
    private $nextHandler;

    public function __construct(callable $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public function __invoke(requestInterface $request, array $options)
    {
        $fn = $this->nextHandler;
        if ($request->getBody()->getSize() === 0) {
            return $fn($request, $options);
        }
        $modify = [];
        if (!$request->hasHeader('Content-Type')) {
            if ($uri = $request->getBody()->getMetadata('uri')) {
                if ($type = Psr7\mimetype_from_filename($uri)) {
                    $modify['set_headers']['Content-Type'] = $type;
                }
            }
        }
        if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) {
            $size = $request->getBody()->getSize();
            if ($size !== null) {
                $modify['set_headers']['Content-Length'] = $size;
            } else {
                $modify['set_headers']['Transfer-Encoding'] = 'chunked';
            }
        }
        $this->addExpectHeader($request, $options, $modify);
        return $fn(Psr7\modify_request($request, $modify), $options);
    }

    private function addExpectHeader(requestInterface $request, array $options, array &$modify)
    {
        if ($request->hasHeader('Expect')) {
            return;
        }
        $expect = isset($options['expect']) ? $options['expect'] : null;
        if ($expect === false || $request->getProtocolVersion() < 1.1) {
            return;
        }
        if ($expect === true) {
            $modify['set_headers']['Expect'] = '100-Continue';
            return;
        }
        if ($expect === null) {
            $expect = 1048576;
        }
        $body = $request->getBody();
        $size = $body->getSize();
        if ($size === null || $size >= (int)$expect || !$body->isSeekable()) {
            $modify['set_headers']['Expect'] = '100-Continue';
        }
    }
}
