<?php namespace yxorP\snag\Request;
class BasicResolver implements ResolverInterface
{
    protected static function getInputParams(array $server, array $params, $fallbackToInput = false)
    {
        static $result;
        if ($result !== null) {
            return $result ?: null;
        }
        $result = $params;
        if ($fallbackToInput === true) {
            $result = $result ?: static::parseInput($server, static::readInput());
        }
        return $result ?: null;
    }

    protected static function parseInput(array $server, $input): ?array
    {
        if (!$input) {
            return null;
        }
        if (isset($server['CONTENT_TYPE']) && stripos($server['CONTENT_TYPE'], 'application/json') === 0) {
            return (array)json_decode($input, true) ?: null;
        }
        if (strtoupper($server['REQUEST_METHOD']) === 'PUT') {
            parse_str($input, $params);
            return (array)$params ?: null;
        }
        return null;
    }

    protected static function readInput(): bool|string
    {
        return file_get_contents('php://input') ?: false;
    }

    protected static function getRequestHeaders(array $server)
    {
        static $headers;
        if ($headers !== null) {
            return $headers;
        }
        if (function_exists('getallheaders')) {
            return getallheaders();
        }
        $headers = [];
        foreach ($server as $name => $value) {
            if (str_starts_with($name, 'HTTP_')) {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            } elseif ($name === 'CONTENT_TYPE') {
                $headers['Content-Type'] = $value;
            } elseif ($name === 'CONTENT_LENGTH') {
                $headers['Content-Length'] = $value;
            }
        }
        return $headers;
    }

    public function resolve(): NullRequest|ConsoleRequest|PhpRequest
    {
        if (isset($_SERVER['REQUEST_METHOD'])) {
            if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
                $params = static::getInputParams($_SERVER, $_GET);
            } else {
                $params = static::getInputParams($_SERVER, $_POST, true);
            }
            return new PhpRequest($_SERVER, empty($_SESSION) ? [] : $_SESSION, empty($_COOKIE) ? [] : $_COOKIE, static::getRequestHeaders($_SERVER), $params);
        }
        if (PHP_SAPI === 'cli' && isset($_SERVER['argv'])) {
            return new ConsoleRequest($_SERVER['argv']);
        }
        return new NullRequest();
    }
}