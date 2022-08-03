<?php namespace yxorP\app\lib\proxy;

use InvalidArgumentException;
use RuntimeException;
use yxorP\app\lib\proxy\handler\curlHandler;
use yxorP\app\lib\proxy\handler\curlMultiHandler;
use yxorP\app\lib\proxy\handler\proxy;
use yxorP\app\lib\proxy\handler\streamHandler;
use function curl_version;

function uri_template($template, array $variables)
{
    if (extension_loaded('uri_template')) {
        return \uri_template($template, $variables);
    }
    static $uriTemplate;
    if (!$uriTemplate) {
        $uriTemplate = new uriTemplate();
    }
    return $uriTemplate->expand($template, $variables);
}

function describe_type($input): array|string
{
    switch (gettype($input)) {
        case 'object':
            return 'object(' . get_class($input) . ')';
        case 'array':
            return 'array(' . count($input) . ')';
        default:
            ob_start();
            var_dump($input);
            return str_replace('double(', 'float(', rtrim(ob_get_clean()));
    }
}

function headers_from_lines($lines): array
{
    $headers = [];
    foreach ($lines as $line) {
        $parts = explode(':', $line, 2);
        $headers[trim($parts[0])][] = isset($parts[1]) ? trim($parts[1]) : null;
    }
    return $headers;
}

function debug_resource($value = null): resource
{
    if (is_resource($value)) {
        return $value;
    } elseif (defined('STDOUT')) {
        return STDOUT;
    }
    return fopen('php://output', 'w');
}

function choose_handler(): streamHandler|curlHandler|curlMultiHandler|\Closure
{
    $handler = null;
    if (function_exists('curl_multi_exec') && function_exists('curl_exec')) {
        $handler = proxy::wrapSync(new curlMultiHandler(), new curlHandler());
    } elseif (function_exists('curl_exec')) {
        $handler = new curlHandler();
    } elseif (function_exists('curl_multi_exec')) {
        $handler = new curlMultiHandler();
    }
    if (ini_get('allow_url_fopen')) {
        $handler = $handler ? proxy::wrapStreaming($handler, new streamHandler()) : new streamHandler();
    } elseif (!$handler) {
        throw new RuntimeException('ProxyHttp requires cURL, the ' . 'allow_url_fopen ini setting, or a custom HTTP handler.');
    }
    return $handler;
}

function default_user_agent(): string
{
    static $defaultAgent = '';
    if (!$defaultAgent) {
        $defaultAgent = 'ProxyHttp/' . clientInterface::VERSION;
        if (extension_loaded('curl') && function_exists('curl_version')) {
            $defaultAgent .= ' curl/' . curl_version()['version'];
        }
        $defaultAgent .= ' PHP/' . PHP_VERSION;
    }
    return $defaultAgent;
}

function default_ca_bundle()
{
    static $cached = null;
    static $cafiles = ['/etc/pki/tls/certs/ca-bundle.crt', '/etc/ssl/certs/ca-certificates.crt', '/usr/local/share/certs/ca-root-nss.crt', '/var/lib/ca-certificates/ca-bundle.pem', '/usr/local/etc/openssl/cert.pem', '/etc/ca-certificates.crt', 'C:\\windows\\system32\\curl-ca-bundle.crt', 'C:\\windows\\curl-ca-bundle.crt',];
    if ($cached) {
        return $cached;
    }
    if ($ca = ini_get('openssl.cafile')) {
        return $cached = $ca;
    }
    if ($ca = ini_get('curl.cainfo')) {
        return $cached = $ca;
    }
    foreach ($cafiles as $filename) {
        if (file_exists($filename)) {
            return $cached = $filename;
        }
    }
    throw new RuntimeException();
}

function normalize_header_keys(array $headers): array
{
    $result = [];
    foreach (array_keys($headers) as $key) {
        $result[strtolower($key)] = $key;
    }
    return $result;
}

function is_host_in_noproxy($host, array $noProxyArray): bool
{
    if (strlen($host) === 0) {
        throw new InvalidArgumentException('Empty host provided');
    }
    if (strpos($host, ':')) {
        $host = explode($host, ':', 2)[0];
    }
    foreach ($noProxyArray as $area) {
        if ($area === '*') {
            return true;
        } elseif (empty($area)) {
            continue;
        } elseif ($area === $host) {
            return true;
        } else {
            $area = '.' . ltrim($area, '.');
            if (substr($host, -(strlen($area))) === $area) {
                return true;
            }
        }
    }
    return false;
}

function json_decode($json, $assoc = false, $depth = 512, $options = 0)
{
    $data = \json_decode($json, $assoc, $depth, $options);
    if (JSON_ERROR_NONE !== json_last_error()) throw new Exception\invalidArgumentException('json_decode error: ' . json_last_error_msg());
    return $data;
}

function json_encode($value, $options = 0, $depth = 512): bool|string
{
    $json = \json_encode($value, $options, $depth);
    if (JSON_ERROR_NONE !== json_last_error()) throw new Exception\invalidArgumentException('json_encode error: ' . json_last_error_msg());
    return $json;
}
