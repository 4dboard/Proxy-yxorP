<?php namespace yxorP\guzzle\Handler;

use Closure;
use Exception;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\RejectedPromise;
use InvalidArgumentException;
use JetBrains\PhpStorm\ArrayShape;
use RuntimeException;
use yxorP\guzzle\Exception\ArequestException;
use yxorP\guzzle\Exception\ConnectException;
use yxorP\guzzle\Promise\FulfilledPromise;
use yxorP\guzzle\Psr7\LazyOpenStream;
use yxorP\guzzle\TransferStats;
use yxorP\psr\Http\Message\RequestInterface;
use function GuzzleHttp\debug_resource;
use function GuzzleHttp\is_host_in_noproxy;
use function GuzzleHttp\Promise\rejection_for;
use function GuzzleHttp\Psr7\stream_for;

class CurlFactory implements CurlFactoryInterface
{
    const CURL_VERSION_STR = 'curl_version';
    const LOW_CURL_VERSION_NUMBER = '7.21.2';
    private array $handles = [];
    private $maxHandles;

    public function __construct($maxHandles)
    {
        $this->maxHandles = $maxHandles;
    }

    public static function finish(callable $handler, EasyHandle $easy, CurlFactoryInterface $factory): FulfilledPromise|RejectedPromise|PromiseInterface
    {
        if (isset($easy->options['on_stats'])) {
            self::invokeStats($easy);
        }
        if (!$easy->response || $easy->errno) {
            return self::finishError($handler, $easy, $factory);
        }
        $factory->release($easy);
        $body = $easy->response->getBody();
        if ($body->isSeekable()) {
            $body->rewind();
        }
        return new FulfilledPromise($easy->response);
    }

    private static function invokeStats(EasyHandle $easy)
    {
        $curlStats = curl_getinfo($easy->handle);
        $curlStats['appconnect_time'] = curl_getinfo($easy->handle, CURLINFO_APPCONNECT_TIME);
        $stats = new TransferStats($easy->request, $easy->response, $curlStats['total_time'], $easy->errno, $curlStats);
        call_user_func($easy->options['on_stats'], $stats);
    }

    private static function finishError(callable $handler, EasyHandle $easy, CurlFactoryInterface $factory): RejectedPromise|PromiseInterface
    {
        $ctx = ['errno' => $easy->errno, 'error' => curl_error($easy->handle), 'appconnect_time' => curl_getinfo($easy->handle, CURLINFO_APPCONNECT_TIME),] + curl_getinfo($easy->handle);
        $ctx[self::CURL_VERSION_STR] = curl_version()['version'];
        $factory->release($easy);
        if (empty($easy->options['_err_message']) && (!$easy->errno || $easy->errno == 65)) {
            return self::retryFailedRewind($handler, $easy, $ctx);
        }
        return self::createRejection($easy, $ctx);
    }

    public function release(EasyHandle $easy)
    {
        $resource = $easy->handle;
        unset($easy->handle);
        if (count($this->handles) >= $this->maxHandles) {
            curl_close($resource);
        } else {
            curl_setopt($resource, CURLOPT_HEADERFUNCTION, null);
            curl_setopt($resource, CURLOPT_READFUNCTION, null);
            curl_setopt($resource, CURLOPT_WRITEFUNCTION, null);
            curl_setopt($resource, CURLOPT_PROGRESSFUNCTION, null);
            curl_reset($resource);
            $this->handles[] = $resource;
        }
    }

    private static function retryFailedRewind(callable $handler, EasyHandle $easy, array $ctx): RejectedPromise|PromiseInterface
    {
        try {
            $body = $easy->request->getBody();
            if ($body->tell() > 0) {
                $body->rewind();
            }
        } catch (RuntimeException $e) {
            $ctx['error'] = 'The connection unexpectedly failed without ' . 'providing an error. The request would have been retried, ' . 'but attempting to rewind the request body failed. ' . 'Exception: ' . $e;
            return self::createRejection($easy, $ctx);
        }
        if (!isset($easy->options['_curl_retries'])) {
            $easy->options['_curl_retries'] = 1;
        } elseif ($easy->options['_curl_retries'] == 2) {
            $ctx['error'] = 'The cURL request was retried 3 times ' . 'and did not succeed. The most likely reason for the failure ' . 'is that cURL was unable to rewind the body of the request ' . 'and subsequent retries resulted in the same error. Turn on ' . 'the debug option to see what went wrong. See ' . 'https://bugs.php.net/bug.php?id=47204 for more information.';
            return self::createRejection($easy, $ctx);
        } else {
            $easy->options['_curl_retries']++;
        }
        return $handler($easy->request, $easy->options);
    }

    private static function createRejection(EasyHandle $easy, array $ctx): RejectedPromise|PromiseInterface
    {
        static $connectionErrors = [CURLE_OPERATION_TIMEOUTED => true, CURLE_COULDNT_RESOLVE_HOST => true, CURLE_COULDNT_CONNECT => true, CURLE_SSL_CONNECT_ERROR => true, CURLE_GOT_NOTHING => true,];
        if ($easy->onHeadersException) {
            return rejection_for(new ArequestException('An error was encountered during the on_headers event', $easy->request, $easy->response, $easy->onHeadersException, $ctx));
        }
        if (version_compare($ctx[self::CURL_VERSION_STR], self::LOW_CURL_VERSION_NUMBER)) {
            $message = sprintf('cURL error %s: %s (%s)', $ctx['errno'], $ctx['error'], 'see https://curl.haxx.se/libcurl/c/libcurl-errors.html');
        } else {
            $message = sprintf('cURL error %s: %s (%s) for %s', $ctx['errno'], $ctx['error'], 'see https://curl.haxx.se/libcurl/c/libcurl-errors.html', $easy->request->getUri());
        }
        $error = isset($connectionErrors[$easy->errno]) ? new ConnectException($message, $easy->request, null, $ctx) : new ArequestException($message, $easy->request, $easy->response, null, $ctx);
        return rejection_for($error);
    }

    public function create(RequestInterface $request, array $options): EasyHandle
    {
        if (isset($options['curl']['body_as_string'])) {
            $options['_body_as_string'] = $options['curl']['body_as_string'];
            unset($options['curl']['body_as_string']);
        }
        $easy = new EasyHandle;
        $easy->request = $request;
        $easy->options = $options;
        $conf = $this->getDefaultConf($easy);
        $this->applyMethod($easy, $conf);
        $this->applyHandlerOptions($easy, $conf);
        $this->applyHeaders($easy, $conf);
        unset($conf['_headers']);
        if (isset($options['curl'])) {
            $conf = array_replace($conf, $options['curl']);
        }
        $conf[CURLOPT_HEADERFUNCTION] = $this->createHeaderFn($easy);
        $easy->handle = $this->handles ? array_pop($this->handles) : curl_init();
        curl_setopt_array($easy->handle, $conf);
        return $easy;
    }

    #[ArrayShape(['_headers' => "\string[][]", \GuzzleHttp\Handler\CURLOPT_CUSTOMREQUEST => "string", \GuzzleHttp\Handler\CURLOPT_URL => "string", \GuzzleHttp\Handler\CURLOPT_RETURNTRANSFER => "false", \GuzzleHttp\Handler\CURLOPT_HEADER => "false", \GuzzleHttp\Handler\CURLOPT_CONNECTTIMEOUT => "int", \GuzzleHttp\Handler\CURLOPT_HTTP_VERSION => "int", \GuzzleHttp\Handler\CURLOPT_PROTOCOLS => "int"])] private function getDefaultConf(EasyHandle $easy): array
    {
        $conf = ['_headers' => $easy->request->getHeaders(), CURLOPT_CUSTOMREQUEST => $easy->request->getMethod(), CURLOPT_URL => (string)$easy->request->getUri()->withFragment(''), CURLOPT_RETURNTRANSFER => false, CURLOPT_HEADER => false, CURLOPT_CONNECTTIMEOUT => 150,];
        if (defined('CURLOPT_PROTOCOLS')) {
            $conf[CURLOPT_PROTOCOLS] = CURLPROTO_HTTP | CURLPROTO_HTTPS;
        }
        $version = $easy->request->getProtocolVersion();
        if ($version == 1.1) {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_1_1;
        } elseif ($version == 2.0) {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_2_0;
        } else {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_1_0;
        }
        return $conf;
    }

    private function applyMethod(EasyHandle $easy, array &$conf)
    {
        $body = $easy->request->getBody();
        $size = $body->getSize();
        if ($size === null || $size > 0) {
            $this->applyBody($easy->request, $easy->options, $conf);
            return;
        }
        $method = $easy->request->getMethod();
        if ($method === 'PUT' || $method === 'POST') {
            if (!$easy->request->hasHeader('Content-Length')) {
                $conf[CURLOPT_HTTPHEADER][] = 'Content-Length: 0';
            }
        } elseif ($method === 'HEAD') {
            $conf[CURLOPT_NOBODY] = true;
            unset($conf[CURLOPT_WRITEFUNCTION], $conf[CURLOPT_READFUNCTION], $conf[CURLOPT_FILE], $conf[CURLOPT_INFILE]);
        }
    }

    private function applyBody(RequestInterface $request, array $options, array &$conf)
    {
        $size = $request->hasHeader('Content-Length') ? (int)$request->getHeaderLine('Content-Length') : null;
        if (($size !== null && $size < 1000000) || !empty($options['_body_as_string'])) {
            $conf[CURLOPT_POSTFIELDS] = (string)$request->getBody();
            $this->removeHeader('Content-Length', $conf);
            $this->removeHeader('Transfer-Encoding', $conf);
        } else {
            $conf[CURLOPT_UPLOAD] = true;
            if ($size !== null) {
                $conf[CURLOPT_INFILESIZE] = $size;
                $this->removeHeader('Content-Length', $conf);
            }
            $body = $request->getBody();
            if ($body->isSeekable()) {
                $body->rewind();
            }
            $conf[CURLOPT_READFUNCTION] = function ($ch, $fd, $length) use ($body) {
                return $body->read($length);
            };
        }
        if (!$request->hasHeader('Expect')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Expect:';
        }
        if (!$request->hasHeader('Content-Type')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Content-Type:';
        }
    }

    private function removeHeader($name, array &$options)
    {
        foreach (array_keys($options['_headers']) as $key) {
            if (!strcasecmp($key, $name)) {
                unset($options['_headers'][$key]);
                return;
            }
        }
    }

    private function applyHandlerOptions(EasyHandle $easy, array &$conf)
    {
        $options = $easy->options;
        if (isset($options['verify'])) {
            if ($options['verify'] === false) {
                unset($conf[CURLOPT_CAINFO]);
                $conf[CURLOPT_SSL_VERIFYHOST] = 0;
                $conf[CURLOPT_SSL_VERIFYPEER] = false;
            } else {
                $conf[CURLOPT_SSL_VERIFYHOST] = 2;
                $conf[CURLOPT_SSL_VERIFYPEER] = true;
                if (is_string($options['verify'])) {
                    if (!file_exists($options['verify'])) {
                        throw new InvalidArgumentException("SSL CA bundle not found: {$options['verify']}");
                    }
                    if (is_dir($options['verify']) || (is_link($options['verify']) && is_dir(readlink($options['verify'])))) {
                        $conf[CURLOPT_CAPATH] = $options['verify'];
                    } else {
                        $conf[CURLOPT_CAINFO] = $options['verify'];
                    }
                }
            }
        }
        if (!empty($options['decode_content'])) {
            $accept = $easy->request->getHeaderLine('Accept-Encoding');
            if ($accept) {
                $conf[CURLOPT_ENCODING] = $accept;
            } else {
                $conf[CURLOPT_ENCODING] = '';
                $conf[CURLOPT_HTTPHEADER][] = 'Accept-Encoding:';
            }
        }
        if (isset($options['sink'])) {
            $sink = $options['sink'];
            if (!is_string($sink)) {
                $sink = stream_for($sink);
            } elseif (!is_dir(dirname($sink))) {
                throw new RuntimeException(sprintf('Directory %s does not exist for sink value of %s', dirname($sink), $sink));
            } else {
                $sink = new LazyOpenStream($sink, 'w+');
            }
            $easy->sink = $sink;
            $conf[CURLOPT_WRITEFUNCTION] = function ($ch, $write) use ($sink) {
                return $sink->write($write);
            };
        } else {
            $conf[CURLOPT_FILE] = fopen('php://temp', 'w+');
            $easy->sink = stream_for($conf[CURLOPT_FILE]);
        }
        $timeoutRequiresNoSignal = false;
        if (isset($options['timeout'])) {
            $timeoutRequiresNoSignal |= $options['timeout'] < 1;
            $conf[CURLOPT_TIMEOUT_MS] = $options['timeout'] * 1000;
        }
        if (isset($options['force_ip_resolve'])) {
            if ('v4' === $options['force_ip_resolve']) {
                $conf[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
            } elseif ('v6' === $options['force_ip_resolve']) {
                $conf[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V6;
            }
        }
        if (isset($options['connect_timeout'])) {
            $timeoutRequiresNoSignal |= $options['connect_timeout'] < 1;
            $conf[CURLOPT_CONNECTTIMEOUT_MS] = $options['connect_timeout'] * 1000;
        }
        if ($timeoutRequiresNoSignal && strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
            $conf[CURLOPT_NOSIGNAL] = true;
        }
        if (isset($options['proxy'])) {
            if (!is_array($options['proxy'])) {
                $conf[CURLOPT_PROXY] = $options['proxy'];
            } else {
                $scheme = $easy->request->getUri()->getScheme();
                if (isset($options['proxy'][$scheme])) {
                    $host = $easy->request->getUri()->getHost();
                    if (!isset($options['proxy']['no']) || !is_host_in_noproxy($host, $options['proxy']['no'])) {
                        $conf[CURLOPT_PROXY] = $options['proxy'][$scheme];
                    }
                }
            }
        }
        if (isset($options['cert'])) {
            $cert = $options['cert'];
            if (is_array($cert)) {
                $conf[CURLOPT_SSLCERTPASSWD] = $cert[1];
                $cert = $cert[0];
            }
            if (!file_exists($cert)) {
                throw new InvalidArgumentException("SSL certificate not found: {$cert}");
            }
            $conf[CURLOPT_SSLCERT] = $cert;
        }
        if (isset($options['ssl_key'])) {
            if (is_array($options['ssl_key'])) {
                if (count($options['ssl_key']) === 2) {
                    list($sslKey, $conf[CURLOPT_SSLKEYPASSWD]) = $options['ssl_key'];
                } else {
                    list($sslKey) = $options['ssl_key'];
                }
            }
            $sslKey = $sslKey ?? $options['ssl_key'];
            if (!file_exists($sslKey)) {
                throw new InvalidArgumentException("SSL private key not found: {$sslKey}");
            }
            $conf[CURLOPT_SSLKEY] = $sslKey;
        }
        if (isset($options['progress'])) {
            $progress = $options['progress'];
            if (!is_callable($progress)) {
                throw new InvalidArgumentException('progress client option must be callable');
            }
            $conf[CURLOPT_NOPROGRESS] = false;
            $conf[CURLOPT_PROGRESSFUNCTION] = function () use ($progress) {
                $args = func_get_args();
                if (is_resource($args[0])) {
                    array_shift($args);
                }
                call_user_func_array($progress, $args);
            };
        }
        if (!empty($options['debug'])) {
            $conf[CURLOPT_STDERR] = debug_resource($options['debug']);
            $conf[CURLOPT_VERBOSE] = true;
        }
    }

    private function applyHeaders(EasyHandle $easy, array &$conf)
    {
        foreach ($conf['_headers'] as $name => $values) {
            foreach ($values as $value) {
                $value = (string)$value;
                if ($value === '') {
                    $conf[CURLOPT_HTTPHEADER][] = "$name;";
                } else {
                    $conf[CURLOPT_HTTPHEADER][] = "$name: $value";
                }
            }
        }
        if (!$easy->request->hasHeader('Accept')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Accept:';
        }
    }

    private function createHeaderFn(EasyHandle $easy): Closure
    {
        if (isset($easy->options['on_headers'])) {
            $onHeaders = $easy->options['on_headers'];
            if (!is_callable($onHeaders)) {
                throw new InvalidArgumentException('on_headers must be callable');
            }
        } else {
            $onHeaders = null;
        }
        return function ($ch, $h) use ($onHeaders, $easy, &$startingResponse) {
            $value = trim($h);
            if ($value === '') {
                $startingResponse = true;
                $easy->createResponse();
                if ($onHeaders !== null) {
                    try {
                        $onHeaders($easy->response);
                    } catch (Exception $e) {
                        $easy->onHeadersException = $e;
                        return -1;
                    }
                }
            } elseif ($startingResponse) {
                $startingResponse = false;
                $easy->headers = [$value];
            } else {
                $easy->headers[] = $value;
            }
            return strlen($h);
        };
    }
}