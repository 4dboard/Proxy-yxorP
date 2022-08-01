<?php namespace yxorP\app\lib\proxy\handler;

use Exception;
use InvalidArgumentException;
use RuntimeException;
use yxorP\app\lib\proxy\exception\aRequestException;
use yxorP\app\lib\proxy\exception\connectException;
use yxorP\app\lib\proxy\promise\fulfilledPromise;
use yxorP\app\lib\proxy\psr7;
use yxorP\app\lib\proxy\transferStats;
use yxorP\app\lib\proxy\utils;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;
use yxorP\app\lib\psr\http\message\streamInterface;
use function yxorP\app\lib\proxy\debug_resource;
use function yxorP\app\lib\proxy\default_ca_bundle;
use function yxorP\app\lib\proxy\headers_from_lines;
use function yxorP\app\lib\proxy\is_host_in_noproxy;
use function yxorP\app\lib\proxy\normalize_header_keys;
use function yxorP\app\lib\proxy\promise\rejection_for;


class streamHandler
{
    private $lastHeaders = [];

    public function __invoke(requestInterface $request, array $options)
    {
        if (isset($options['delay'])) {
            usleep($options['delay'] * 1000);
        }
        $startTime = isset($options['on_stats']) ? utils::currentTime() : null;
        try {
            $request = $request->withoutHeader('Expect');
            if (0 === $request->getBody()->getSize()) {
                $request = $request->withHeader('Content-Length', '0');
            }
            return $this->createResponse($request, $options, $this->createStream($request, $options), $startTime);
        } catch (InvalidArgumentException $e) {
            throw $e;
        } catch (Exception $e) {
            $message = $e->getMessage();
            if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host") || strpos($message, "connection attempt failed")) {
                $e = new connectException($e->getMessage(), $request, $e);
            }
            $e = aRequestException::wrapException($request, $e);
            $this->invokeStats($options, $request, $startTime, null, $e);
            return rejection_for($e);
        }
    }

    private function createResponse(requestInterface $request, array $options, $stream, $startTime)
    {
        $hdrs = $this->lastHeaders;
        $this->lastHeaders = [];
        $parts = explode(' ', array_shift($hdrs), 3);
        $ver = explode('/', $parts[0])[1];
        $status = $parts[1];
        $reason = isset($parts[2]) ? $parts[2] : null;
        $headers = headers_from_lines($hdrs);
        list($stream, $headers) = $this->checkDecode($options, $headers, $stream);
        $stream = Psr7\stream_for($stream);
        $sink = $stream;
        if (strcasecmp('HEAD', $request->getMethod())) {
            $sink = $this->createSink($stream, $options);
        }
        $response = new Psr7\response($status, $headers, $sink, $ver, $reason);
        if (isset($options['on_headers'])) {
            try {
                $options['on_headers']($response);
            } catch (Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $ex = new aRequestException($msg, $request, $response, $e);
                return rejection_for($ex);
            }
        }
        if ($sink !== $stream) {
            $this->drain($stream, $sink, $response->getHeaderLine('Content-Length'));
        }
        $this->invokeStats($options, $request, $startTime, $response, null);
        return new fulfilledPromise($response);
    }

    private function checkDecode(array $options, array $headers, $stream)
    {
        if (!empty($options['decode_content'])) {
            $normalizedKeys = normalize_header_keys($headers);
            if (isset($normalizedKeys['content-encoding'])) {
                $encoding = $headers[$normalizedKeys['content-encoding']];
                if ($encoding[0] === 'gzip' || $encoding[0] === 'deflate') {
                    $stream = new Psr7\inflateStream(Psr7\stream_for($stream));
                    $headers['x-encoded-content-encoding'] = $headers[$normalizedKeys['content-encoding']];
                    unset($headers[$normalizedKeys['content-encoding']]);
                    if (isset($normalizedKeys['content-length'])) {
                        $headers['x-encoded-content-length'] = $headers[$normalizedKeys['content-length']];
                        $length = (int)$stream->getSize();
                        if ($length === 0) {
                            unset($headers[$normalizedKeys['content-length']]);
                        } else {
                            $headers[$normalizedKeys['content-length']] = [$length];
                        }
                    }
                }
            }
        }
        return [$stream, $headers];
    }

    private function createSink(streamInterface $stream, array $options)
    {
        if (!empty($options['stream'])) {
            return $stream;
        }
        $sink = isset($options['sink']) ? $options['sink'] : fopen('php://temp', 'r+');
        return is_string($sink) ? new Psr7\lazyOpenStream($sink, 'w+') : Psr7\stream_for($sink);
    }

    private function drain(streamInterface $source, streamInterface $sink, $contentLength)
    {
        Psr7\copy_to_stream($source, $sink, (strlen($contentLength) > 0 && (int)$contentLength > 0) ? (int)$contentLength : -1);
        $sink->seek(0);
        $source->close();
        return $sink;
    }

    private function invokeStats(array $options, requestInterface $request, $startTime, responseInterface $response = null, $error = null)
    {
        if (isset($options['on_stats'])) {
            $stats = new transferStats($request, $response, utils::currentTime() - $startTime, $error, []);
            call_user_func($options['on_stats'], $stats);
        }
    }

    private function createStream(requestInterface $request, array $options)
    {
        static $methods;
        if (!$methods) {
            $methods = array_flip(get_class_methods(__CLASS__));
        }
        if ($request->getProtocolVersion() === '1.1' && !$request->hasHeader('Connection')) {
            $request = $request->withHeader('Connection', 'close');
        }
        if (!isset($options['verify'])) {
            $options['verify'] = true;
        }
        $params = [];
        $context = $this->getDefaultContext($request);
        if (isset($options['on_headers']) && !is_callable($options['on_headers'])) {
            throw new InvalidArgumentException('on_headers must be callable');
        }
        if (!empty($options)) {
            foreach ($options as $key => $value) {
                $method = "add_{$key}";
                if (isset($methods[$method])) {
                    $this->{$method}($request, $context, $value, $params);
                }
            }
        }
        if (isset($options['stream_context'])) {
            if (!is_array($options['stream_context'])) {
                throw new InvalidArgumentException('stream_context must be an array');
            }
            $context = array_replace_recursive($context, $options['stream_context']);
        }
        if (isset($options['auth']) && is_array($options['auth']) && isset($options['auth'][2]) && 'ntlm' === $options['auth'][2]) {
            throw new InvalidArgumentException('Microsoft NTLM authentication only supported with curl handler');
        }
        $uri = $this->resolveHost($request, $options);
        $context = $this->createResource(function () use ($context, $params) {
            return stream_context_create($context, $params);
        });
        return $this->createResource(function () use ($uri, &$http_response_header, $context, $options) {
            $resource = fopen((string)$uri, 'r', null, $context);
            $this->lastHeaders = $http_response_header;
            if (isset($options['read_timeout'])) {
                $readTimeout = $options['read_timeout'];
                $sec = (int)$readTimeout;
                $usec = ($readTimeout - $sec) * 100000;
                stream_set_timeout($resource, $sec, $usec);
            }
            return $resource;
        });
    }

    private function getDefaultContext(requestInterface $request)
    {
        $headers = '';
        foreach ($request->getHeaders() as $name => $value) {
            foreach ($value as $val) {
                $headers .= "$name: $val\r\n";
            }
        }
        $context = ['http' => ['method' => $request->getMethod(), 'header' => $headers, 'protocol_version' => $request->getProtocolVersion(), 'ignore_errors' => true, 'follow_location' => 0,],];
        $body = (string)$request->getBody();
        if (!empty($body)) {
            $context['http']['content'] = $body;
            if (!$request->hasHeader('Content-Type')) {
                $context['http']['header'] .= "Content-Type:\r\n";
            }
        }
        $context['http']['header'] = rtrim($context['http']['header']);
        return $context;
    }

    private function resolveHost(requestInterface $request, array $options)
    {
        $uri = $request->getUri();
        if (isset($options['force_ip_resolve']) && !filter_var($uri->getHost(), FILTER_VALIDATE_IP)) {
            if ('v4' === $options['force_ip_resolve']) {
                $records = dns_get_record($uri->getHost(), DNS_A);
                if (!isset($records[0]['ip'])) {
                    throw new connectException(sprintf("Could not resolve IPv4 address for host '%s'", $uri->getHost()), $request);
                }
                $uri = $uri->withHost($records[0]['ip']);
            } elseif ('v6' === $options['force_ip_resolve']) {
                $records = dns_get_record($uri->getHost(), DNS_AAAA);
                if (!isset($records[0]['ipv6'])) {
                    throw new connectException(sprintf("Could not resolve IPv6 address for host '%s'", $uri->getHost()), $request);
                }
                $uri = $uri->withHost('[' . $records[0]['ipv6'] . ']');
            }
        }
        return $uri;
    }

    private function createResource(callable $callback)
    {
        $errors = null;
        set_error_handler(function ($_, $msg, $file, $line) use (&$errors) {
            $errors[] = ['message' => $msg, 'file' => $file, 'line' => $line];
            return true;
        });
        $resource = $callback();
        restore_error_handler();
        if (!$resource) {
            $message = 'Error creating resource: ';
            foreach ($errors as $err) {
                foreach ($err as $key => $value) {
                    $message .= "[$key] $value" . PHP_EOL;
                }
            }
            throw new RuntimeException(trim($message));
        }
        return $resource;
    }

    private function add_proxy(requestInterface $request, &$options, $value, &$params)
    {
        if (!is_array($value)) {
            $options['http']['proxy'] = $value;
        } else {
            $scheme = $request->getUri()->getScheme();
            if (isset($value[$scheme])) {
                if (!isset($value['no']) || !is_host_in_noproxy($request->getUri()->getHost(), $value['no'])) {
                    $options['http']['proxy'] = $value[$scheme];
                }
            }
        }
    }

    private function add_timeout(requestInterface $request, &$options, $value, &$params)
    {
        if ($value > 0) {
            $options['http']['timeout'] = $value;
        }
    }

    private function add_verify(requestInterface $request, &$options, $value, &$params)
    {
        if ($value === true) {
            if (PHP_VERSION_ID < 50600) {
                $options['ssl']['cafile'] = default_ca_bundle();
            }
        } elseif (is_string($value)) {
            $options['ssl']['cafile'] = $value;
            if (!file_exists($value)) {
                throw new RuntimeException("SSL CA bundle not found: $value");
            }
        } elseif ($value === false) {
            $options['ssl']['verify_peer'] = false;
            $options['ssl']['verify_peer_name'] = false;
            return;
        } else {
            throw new InvalidArgumentException('Invalid verify request option');
        }
        $options['ssl']['verify_peer'] = true;
        $options['ssl']['verify_peer_name'] = true;
        $options['ssl']['allow_self_signed'] = false;
    }

    private function add_cert(requestInterface $request, &$options, $value, &$params)
    {
        if (is_array($value)) {
            $options['ssl']['passphrase'] = $value[1];
            $value = $value[0];
        }
        if (!file_exists($value)) {
            throw new RuntimeException("SSL certificate not found: {$value}");
        }
        $options['ssl']['local_cert'] = $value;
    }

    private function add_progress(requestInterface $request, &$options, $value, &$params)
    {
        $this->addNotification($params, function ($code, $a, $b, $c, $transferred, $total) use ($value) {
            if ($code === STREAM_NOTIFY_PROGRESS) {
                $value($total, $transferred, null, null);
            }
        });
    }

    private function addNotification(array &$params, callable $notify)
    {
        if (!isset($params['notification'])) {
            $params['notification'] = $notify;
        } else {
            $params['notification'] = $this->callArray([$params['notification'], $notify]);
        }
    }

    private function callArray(array $functions)
    {
        return function () use ($functions) {
            $args = func_get_args();
            foreach ($functions as $fn) {
                call_user_func_array($fn, $args);
            }
        };
    }

    private function add_debug(requestInterface $request, &$options, $value, &$params)
    {
        if ($value === false) {
            return;
        }
        static $map = [STREAM_NOTIFY_CONNECT => 'CONNECT', STREAM_NOTIFY_AUTH_REQUIRED => 'AUTH_REQUIRED', STREAM_NOTIFY_AUTH_RESULT => 'AUTH_RESULT', STREAM_NOTIFY_MIME_TYPE_IS => 'MIME_TYPE_IS', STREAM_NOTIFY_FILE_SIZE_IS => 'FILE_SIZE_IS', STREAM_NOTIFY_REDIRECTED => 'REDIRECTED', STREAM_NOTIFY_PROGRESS => 'PROGRESS', STREAM_NOTIFY_FAILURE => 'FAILURE', STREAM_NOTIFY_COMPLETED => 'COMPLETED', STREAM_NOTIFY_RESOLVE => 'RESOLVE',];
        static $args = ['severity', 'message', 'message_code', 'bytes_transferred', 'bytes_max'];
        $value = debug_resource($value);
        $ident = $request->getMethod() . ' ' . $request->getUri()->withFragment('');
        $this->addNotification($params, function () use ($ident, $value, $map, $args) {
            $passed = func_get_args();
            $code = array_shift($passed);
            fprintf($value, '<%s> [%s] ', $ident, $map[$code]);
            foreach (array_filter($passed) as $i => $v) {
                fwrite($value, $args[$i] . ': "' . $v . '" ');
            }
            fwrite($value, "\n");
        });
    }
}
