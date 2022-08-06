<?php namespace yxorP\app\lib\proxy\psr7;

use InvalidArgumentException;
use Iterator;
use RuntimeException;
use yxorP\app\lib\psr\http\message\messageInterface;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;
use yxorP\app\lib\psr\http\message\serverRequestInterface;
use yxorP\app\lib\psr\http\message\streamInterface;
use yxorP\app\lib\psr\http\message\uriInterface;

function str(messageInterface $message)
{
    if ($message instanceof requestInterface) {
        $msg = trim($message->getMethod() . ' ' . $message->getRequestTarget()) . ' HTTP/' . $message->getProtocolVersion();
        if (!$message->hasHeader('host')) {
            $msg .= "\r\nHost: " . $message->getUri()->getHost();
        }
    } elseif ($message instanceof responseInterface) {
        $msg = 'HTTP/' . $message->getProtocolVersion() . ' ' . $message->getStatusCode() . ' ' . $message->getReasonPhrase();
    } else {
        throw new InvalidArgumentException('Unknown message type');
    }
    foreach ($message->getHeaders() as $name => $values) {
        $msg .= "\r\n{$name}: " . implode(', ', $values);
    }
    return "{$msg}\r\n\r\n" . $message->getBody();
}

function uri_for($uri)
{
    if ($uri instanceof uriInterface) {
        return $uri;
    } elseif (is_string($uri)) {
        return new uri($uri);
    }
    throw new InvalidArgumentException('URI must be a string or UriInterface');
}

function stream_for($resource = '', array $options = [])
{
    if (is_scalar($resource)) {
        $stream = fopen('php://temp', 'r+');
        if ($resource !== '') {
            fwrite($stream, $resource);
            fseek($stream, 0);
        }
        return new stream($stream, $options);
    }
    switch (gettype($resource)) {
        case 'resource':
            return new stream($resource, $options);
        case 'object':
            if ($resource instanceof streamInterface) {
                return $resource;
            } elseif ($resource instanceof Iterator) {
                return new pumpStream(function () use ($resource) {
                    if (!$resource->valid()) {
                        return false;
                    }
                    $result = $resource->current();
                    $resource->next();
                    return $result;
                }, $options);
            } elseif (method_exists($resource, '__toString')) {
                return stream_for((string)$resource, $options);
            }
            break;
        case 'NULL':
            return new stream(fopen('php://temp', 'r+'), $options);
    }
    if (is_callable($resource)) {
        return new pumpStream($resource, $options);
    }
    throw new InvalidArgumentException('Invalid resource type: ' . gettype($resource));
}

function parse_header($header)
{
    static $trimmed = "\"'  \n\t\r";
    $params = $matches = [];
    foreach (normalize_header($header) as $val) {
        $part = [];
        foreach (preg_split('/;(?=([^"]*"[^"]*")*[^"]*$)/', $val) as $kvp) {
            if (preg_match_all('/<[^>]+>|[^=]+/', $kvp, $matches)) {
                $m = $matches[0];
                if (isset($m[1])) {
                    $part[trim($m[0], $trimmed)] = trim($m[1], $trimmed);
                } else {
                    $part[] = trim($m[0], $trimmed);
                }
            }
        }
        if ($part) {
            $params[] = $part;
        }
    }
    return $params;
}

function normalize_header($header)
{
    if (!is_array($header)) {
        return array_map('trim', explode(',', $header));
    }
    $result = [];
    foreach ($header as $value) {
        foreach ((array)$value as $v) {
            if (strpos($v, ',') === false) {
                $result[] = $v;
                continue;
            }
            foreach (preg_split('/,(?=([^"]*"[^"]*")*[^"]*$)/', $v) as $vv) {
                $result[] = trim($vv);
            }
        }
    }
    return $result;
}

function modify_request(requestInterface $request, array $changes)
{
    if (!$changes) {
        return $request;
    }
    $headers = $request->getHeaders();
    if (!isset($changes['uri'])) {
        $uri = $request->getUri();
    } else {
        if ($host = $changes['uri']->getHost()) {
            $changes['set_headers']['Host'] = $host;
            if ($port = $changes['uri']->getPort()) {
                $standardPorts = ['http' => 80, 'https' => 443];
                $scheme = $changes['uri']->getScheme();
                if (isset($standardPorts[$scheme]) && $port != $standardPorts[$scheme]) {
                    $changes['set_headers']['Host'] .= ':' . $port;
                }
            }
        }
        $uri = $changes['uri'];
    }
    if (!empty($changes['remove_headers'])) {
        $headers = _caseless_remove($changes['remove_headers'], $headers);
    }
    if (!empty($changes['set_headers'])) {
        $headers = _caseless_remove(array_keys($changes['set_headers']), $headers);
        $headers = $changes['set_headers'] + $headers;
    }
    if (isset($changes['query'])) {
        $uri = $uri->withQuery($changes['query']);
    }
    if ($request instanceof serverRequestInterface) {
        return (new serverRequest(isset($changes['method']) ? $changes['method'] : $request->getMethod(), $uri, $headers, isset($changes['body']) ? $changes['body'] : $request->getBody(), isset($changes['version']) ? $changes['version'] : $request->getProtocolVersion(), $request->getServerParams()))->withParsedBody($request->getParsedBody())->withQueryParams($request->getQueryParams())->withCookieParams($request->getCookieParams())->withUploadedFiles($request->getUploadedFiles());
    }
    return new request(isset($changes['method']) ? $changes['method'] : $request->getMethod(), $uri, $headers, isset($changes['body']) ? $changes['body'] : $request->getBody(), isset($changes['version']) ? $changes['version'] : $request->getProtocolVersion());
}

function rewind_body(messageInterface $message)
{
    $body = $message->getBody();
    if ($body->tell()) {
        $body->rewind();
    }
}

function try_fopen($filename, $mode)
{
    $ex = null;
    set_error_handler(function () use ($filename, $mode, &$ex) {
        $ex = new RuntimeException(sprintf('Unable to open %s using mode %s: %s', $filename, $mode, func_get_args()[1]));
    });
    $handle = fopen($filename, $mode);
    restore_error_handler();
    if ($ex) {
        throw $ex;
    }
    return $handle;
}

function copy_to_string(streamInterface $stream, $maxLen = -1)
{
    $buffer = '';
    if ($maxLen === -1) {
        while (!$stream->eof()) {
            $buf = $stream->read(1048576);
            if ($buf === null) {
                break;
            }
            $buffer .= $buf;
        }
        return $buffer;
    }
    $len = 0;
    while (!$stream->eof() && $len < $maxLen) {
        $buf = $stream->read($maxLen - $len);
        if ($buf === null) {
            break;
        }
        $buffer .= $buf;
        $len = strlen($buffer);
    }
    return $buffer;
}

function copy_to_stream(streamInterface $source, streamInterface $dest, $maxLen = -1)
{
    $bufferSize = 8192;
    if ($maxLen === -1) {
        while (!$source->eof()) {
            if (!$dest->write($source->read($bufferSize))) {
                break;
            }
        }
    } else {
        $remaining = $maxLen;
        while ($remaining > 0 && !$source->eof()) {
            $buf = $source->read(min($bufferSize, $remaining));
            $len = strlen($buf);
            if (!$len) {
                break;
            }
            $remaining -= $len;
            $dest->write($buf);
        }
    }
}

function hash(streamInterface $stream, $algo, $rawOutput = false)
{
    $pos = $stream->tell();
    if ($pos > 0) {
        $stream->rewind();
    }
    $ctx = hash_init($algo);
    while (!$stream->eof()) {
        hash_update($ctx, $stream->read(1048576));
    }
    $out = hash_final($ctx, (bool)$rawOutput);
    $stream->seek($pos);
    return $out;
}

function readline(streamInterface $stream, $maxLength = null)
{
    $buffer = '';
    $size = 0;
    while (!$stream->eof()) {
        if (null === ($byte = $stream->read(1))) {
            return $buffer;
        }
        $buffer .= $byte;
        if ($byte === "\n" || ++$size === $maxLength - 1) {
            break;
        }
    }
    return $buffer;
}

function parse_request($message)
{
    $data = _parse_message($message);
    $matches = [];
    if (!preg_match('/^[\S]+\s+([a-zA-Z]+:\/\/|\/).*/', $data['start-line'], $matches)) {
        throw new InvalidArgumentException('Invalid request string');
    }
    $parts = explode(' ', $data['start-line'], 3);
    $version = isset($parts[2]) ? explode('/', $parts[2])[1] : '1.1';
    $request = new request($parts[0], $matches[1] === '/' ? _parse_request_uri($parts[1], $data['headers']) : $parts[1], $data['headers'], $data['body'], $version);
    return $matches[1] === '/' ? $request : $request->withRequestTarget($parts[1]);
}

function parse_response($message)
{
    $data = _parse_message($message);
    if (!preg_match('/^HTTP\/.* [0-9]{3}( .*|$)/', $data['start-line'])) {
        throw new InvalidArgumentException('Invalid response string: ' . $data['start-line']);
    }
    $parts = explode(' ', $data['start-line'], 3);
    return new response($parts[1], $data['headers'], $data['body'], explode('/', $parts[0])[1], isset($parts[2]) ? $parts[2] : null);
}

function parse_query($str, $urlEncoding = true)
{
    $result = [];
    if ($str === '') {
        return $result;
    }
    if ($urlEncoding === true) {
        $decoder = function ($value) {
            return rawurldecode(str_replace('+', ' ', $value));
        };
    } elseif ($urlEncoding === PHP_QUERY_RFC3986) {
        $decoder = 'rawurldecode';
    } elseif ($urlEncoding === PHP_QUERY_RFC1738) {
        $decoder = 'urldecode';
    } else {
        $decoder = function ($str) {
            return $str;
        };
    }
    foreach (explode('&', $str) as $kvp) {
        $parts = explode('=', $kvp, 2);
        $key = $decoder($parts[0]);
        $value = isset($parts[1]) ? $decoder($parts[1]) : null;
        if (!isset($result[$key])) {
            $result[$key] = $value;
        } else {
            if (!is_array($result[$key])) {
                $result[$key] = [$result[$key]];
            }
            $result[$key][] = $value;
        }
    }
    return $result;
}

function build_query(array $params, $encoding = PHP_QUERY_RFC3986)
{
    if (!$params) {
        return '';
    }
    if ($encoding === false) {
        $encoder = function ($str) {
            return $str;
        };
    } elseif ($encoding === PHP_QUERY_RFC3986) {
        $encoder = 'rawurlencode';
    } elseif ($encoding === PHP_QUERY_RFC1738) {
        $encoder = 'urlencode';
    } else {
        throw new InvalidArgumentException('Invalid type');
    }
    $qs = '';
    foreach ($params as $k => $v) {
        $k = $encoder($k);
        if (!is_array($v)) {
            $qs .= $k;
            if ($v !== null) {
                $qs .= '=' . $encoder($v);
            }
            $qs .= '&';
        } else {
            foreach ($v as $vv) {
                $qs .= $k;
                if ($vv !== null) {
                    $qs .= '=' . $encoder($vv);
                }
                $qs .= '&';
            }
        }
    }
    return $qs ? (string)substr($qs, 0, -1) : '';
}

function mimetype_from_filename($filename)
{
    return mimetype_from_extension(pathinfo($filename, PATHINFO_EXTENSION));
}

function mimetype_from_extension($extension)
{
    static $mimetypes = ['3gp' => 'video/3gpp', '7z' => 'application/x-7z-compressed', 'aac' => 'audio/x-aac', 'ai' => 'application/postscript', 'aif' => 'audio/x-aiff', 'asc' => 'text/plain', 'asf' => 'video/x-ms-asf', 'atom' => 'application/atom+xml', 'avi' => 'video/x-msvideo', 'bmp' => 'image/bmp', 'bz2' => 'application/x-bzip2', 'cer' => 'application/pkix-cert', 'crl' => 'application/pkix-crl', 'crt' => 'application/x-x509-ca-cert', 'css' => 'text/css', 'csv' => 'text/csv', 'cu' => 'application/cu-seeme', 'deb' => 'application/x-debian-package', 'doc' => 'application/msword', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'dvi' => 'application/x-dvi', 'eot' => 'application/vnd.ms-fontobject', 'eps' => 'application/postscript', 'epub' => 'application/epub+zip', 'etx' => 'text/x-setext', 'flac' => 'audio/flac', 'flv' => 'video/x-flv', 'gif' => 'image/gif', 'gz' => 'application/gzip', 'htm' => 'text/html', 'html' => 'text/html', 'ico' => 'image/x-icon', 'ics' => 'text/calendar', 'ini' => 'text/plain', 'iso' => 'application/x-iso9660-image', 'jar' => 'application/java-archive', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'js' => 'text/javascript', 'json' => 'application/json', 'latex' => 'application/x-latex', 'log' => 'text/plain', 'm4a' => 'audio/mp4', 'm4v' => 'video/mp4', 'mid' => 'audio/midi', 'midi' => 'audio/midi', 'mov' => 'video/quicktime', 'mkv' => 'video/x-matroska', 'mp3' => 'audio/mpeg', 'mp4' => 'video/mp4', 'mp4a' => 'audio/mp4', 'mp4v' => 'video/mp4', 'mpe' => 'video/mpeg', 'mpeg' => 'video/mpeg', 'mpg' => 'video/mpeg', 'mpg4' => 'video/mp4', 'oga' => 'audio/ogg', 'ogg' => 'audio/ogg', 'ogv' => 'video/ogg', 'ogx' => 'application/ogg', 'pbm' => 'image/x-portable-bitmap', 'pdf' => 'application/pdf', 'pgm' => 'image/x-portable-graymap', 'png' => 'image/png', 'pnm' => 'image/x-portable-anymap', 'ppm' => 'image/x-portable-pixmap', 'ppt' => 'application/vnd.ms-powerpoint', 'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'ps' => 'application/postscript', 'qt' => 'video/quicktime', 'rar' => 'application/x-rar-compressed', 'ras' => 'image/x-cmu-raster', 'rss' => 'application/rss+xml', 'rtf' => 'application/rtf', 'sgm' => 'text/sgml', 'sgml' => 'text/sgml', 'svg' => 'image/svg+xml', 'swf' => 'application/x-shockwave-flash', 'tar' => 'application/x-tar', 'tif' => 'image/tiff', 'tiff' => 'image/tiff', 'torrent' => 'application/x-bittorrent', 'ttf' => 'application/x-font-ttf', 'txt' => 'text/plain', 'wav' => 'audio/x-wav', 'webm' => 'video/webm', 'webp' => 'image/webp', 'wma' => 'audio/x-ms-wma', 'wmv' => 'video/x-ms-wmv', 'woff' => 'application/x-font-woff', 'wsdl' => 'application/wsdl+xml', 'xbm' => 'image/x-xbitmap', 'xls' => 'application/vnd.ms-excel', 'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xml' => 'application/xml', 'xpm' => 'image/x-xpixmap', 'xwd' => 'image/x-xwindowdump', 'yaml' => 'text/yaml', 'yml' => 'text/yaml', 'zip' => 'application/zip',];
    $extension = strtolower($extension);
    return isset($mimetypes[$extension]) ? $mimetypes[$extension] : null;
}

function _parse_message($message)
{
    if (!$message) {
        throw new InvalidArgumentException('Invalid message');
    }
    $message = ltrim($message, "\r\n");
    $messageParts = preg_split("/\r?\n\r?\n/", $message, 2);
    if ($messageParts === false || count($messageParts) !== 2) {
        throw new InvalidArgumentException('Invalid message: Missing header delimiter');
    }
    list($rawHeaders, $body) = $messageParts;
    $rawHeaders .= "\r\n";
    $headerParts = preg_split("/\r?\n/", $rawHeaders, 2);
    if ($headerParts === false || count($headerParts) !== 2) {
        throw new InvalidArgumentException('Invalid message: Missing status line');
    }
    list($startLine, $rawHeaders) = $headerParts;
    if (preg_match("/(?:^HTTP\/|^[A-Z]+ \S+ HTTP\/)(\d+(?:\.\d+)?)/i", $startLine, $matches) && $matches[1] === '1.0') {
        $rawHeaders = preg_replace(rfc7230::HEADER_FOLD_REGEX, ' ', $rawHeaders);
    }
    $count = preg_match_all(rfc7230::HEADER_REGEX, $rawHeaders, $headerLines, PREG_SET_ORDER);
    if ($count !== substr_count($rawHeaders, "\n")) {
        if (preg_match(rfc7230::HEADER_FOLD_REGEX, $rawHeaders)) {
            throw new InvalidArgumentException('Invalid header syntax: Obsolete line folding');
        }
        throw new InvalidArgumentException('Invalid header syntax');
    }
    $headers = [];
    foreach ($headerLines as $headerLine) {
        $headers[$headerLine[1]][] = $headerLine[2];
    }
    return ['start-line' => $startLine, 'headers' => $headers, 'body' => $body,];
}

function _parse_request_uri($path, array $headers)
{
    $hostKey = array_filter(array_keys($headers), function ($k) {
        return strtolower($k) === 'host';
    });
    if (!$hostKey) {
        return $path;
    }
    $host = $headers[reset($hostKey)][0];
    $scheme = substr($host, -4) === ':443' ? 'https' : 'http';
    return $scheme . '://' . $host . '/' . ltrim($path, '/');
}

function get_message_body_summary(messageInterface $message, $truncateAt = 120)
{
    $body = $message->getBody();
    if (!$body->isSeekable() || !$body->isReadable()) {
        return null;
    }
    $size = $body->getSize();
    if ($size === 0) {
        return null;
    }
    $summary = $body->read($truncateAt);
    $body->rewind();
    if ($size > $truncateAt) {
        $summary .= ' (truncated...)';
    }
    if (preg_match('/[^\pL\pM\pN\pP\pS\pZ\n\r\t]/', $summary)) {
        return null;
    }
    return $summary;
}

function _caseless_remove($keys, array $data)
{
    $result = [];
    foreach ($keys as &$key) {
        $key = strtolower($key);
    }
    foreach ($data as $k => $v) {
        if (!in_array(strtolower($k), $keys)) {
            $result[$k] = $v;
        }
    }
    return $result;
}
