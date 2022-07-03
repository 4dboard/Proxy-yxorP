<?php namespace yxorP\protocols\Http;

use Exception;
use yxorP\protocols\http;
use yxorP\Worker;
use function array_merge_recursive;
use function array_walk_recursive;
use function bin2hex;
use function clearstatcache;
use function count;
use function explode;
use function file_put_contents;
use function is_file;
use function json_decode;
use function ltrim;
use function microtime;
use function pack;
use function parse_str;
use function parse_url;
use function preg_match;
use function preg_replace;
use function strlen;
use function strpos;
use function strstr;
use function strtolower;
use function substr;
use function tempnam;
use function trim;
use function unlink;
use function urlencode;

/* Creating a class called request. */

class request
{
    /* Defining a constant. */
    public static int $maxFileUploads = 1024;
    /* Declaring a private static variable called $_enableCache and setting it to true. */
    private static bool $_enableCache = true;
    /* Creating a variable called connection and setting it to null. */
    /* Creating a variable called $session and setting it to null. */
    public $connection = null;
    /* Declaring a class named `Person` with a property named `properties` that is an array. */
    public $session = null;
    /* Creating a private variable called $_buffer. */
    public array $properties = [];
    private $_buffer = null;
    /* Creating a private variable called $_data and setting it to null. */
    private $_data = null;

    /* Creating a constructor for the class. */
    public function __construct($buffer)
    {
        $this->_buffer = $buffer;
    }

    /* A method that is being called on the class. */
    public static function enableCache($value)
    {
        static::$_enableCache = (bool)$value;
    }

    /* A method that returns the value of the given key. If the key does not exist, it returns the default value. */
    public function get($name = null, $default = null)
    {
        if (!isset($this->_data['get'])) {
            $this->parseGet();
        }
        if (null === $name) {
            return $this->_data['get'];
        }
        return $this->_data['get'][$name] ?? $default;
    }

    /* A function that is parsing the get request. */
    protected function parseGet()
    {
        static $cache = [];
        $query_string = $this->queryString();
        $this->_data['get'] = [];
        if ($query_string === '') {
            return;
        }
        $cacheable = static::$_enableCache && !isset($query_string[1024]);
        if ($cacheable && isset($cache[$query_string])) {
            $this->_data['get'] = $cache[$query_string];
            return;
        }
        parse_str($query_string, $this->_data['get']);
        if ($cacheable) {
            $cache[$query_string] = $this->_data['get'];
            if (count($cache) > 256) {
                unset($cache[key($cache)]);
            }
        }
    }

    /* A function that returns the query string of the current URL. */
    public function queryString()
    {
        if (!isset($this->_data['query_string'])) $this->_data['query_string'] = (string)parse_url($this->uri(), PHP_URL_QUERY);
        return $this->_data['query_string'];
    }

    /* A function that returns the URI of the current page. */
    public function uri()
    {
        if (!isset($this->_data['uri'])) $this->parseHeadFirstLine();
        return $this->_data['uri'];
    }

    /* A method that is parsing the first line of the head. */
    protected function parseHeadFirstLine()
    {
        $first_line = strstr($this->_buffer, "\r\n", true);
        $tmp = explode(' ', $first_line, 3);
        $this->_data['method'] = $tmp[0];
        $this->_data['uri'] = $tmp[1] ?? '/';
    }

    /* A function that is being called post. It is taking in two parameters, name and default. */
    public function post($name = null, $default = null)
    {
        if (!isset($this->_data['post'])) $this->parsePost();
        if (null === $name) return $this->_data['post'];
        return $this->_data['post'][$name] ?? $default;
    }

    /* A function that is parsing the post. */
    protected function parsePost()
    {
        static $cache = [];
        $this->_data['post'] = $this->_data['files'] = [];
        $content_type = $this->header('content-type', '');
        if (preg_match('/boundary="?(\S+)"?/', $content_type, $match)) {
            $http_post_boundary = '--' . $match[1];
            $this->parseUploadFiles($http_post_boundary);
            return;
        }
        $body_buffer = $this->rawBody();
        if ($body_buffer === '') return;
        $cacheable = static::$_enableCache && !isset($body_buffer[1024]);
        if ($cacheable && isset($cache[$body_buffer])) {
            $this->_data['post'] = $cache[$body_buffer];
            return;
        }
        if (preg_match('/\bjson\b/i', $content_type)) $this->_data['post'] = (array)json_decode($body_buffer, true); else  parse_str($body_buffer, $this->_data['post']);
        if ($cacheable) {
            $cache[$body_buffer] = $this->_data['post'];
            if (count($cache) > 256) unset($cache[key($cache)]);
        }
    }

    /* *|CURSOR_MARCADOR|* */
    public function header($name = null, $default = null)
    {
        if (!isset($this->_data['headers'])) $this->parseHeaders();
        if (null === $name) return $this->_data['headers'];
        $name = strtolower($name);
        return $this->_data['headers'][$name] ?? $default;
    }

    /* A comment. */
    protected function parseHeaders()
    {
        static $cache = [];
        $this->_data['headers'] = [];
        $raw_head = $this->rawHead();
        $end_line_position = strpos($raw_head, "\r\n");
        if ($end_line_position === false) return;
        $head_buffer = substr($raw_head, $end_line_position + 2);
        $cacheable = static::$_enableCache && !isset($head_buffer[2048]);
        if ($cacheable && isset($cache[$head_buffer])) {
            $this->_data['headers'] = $cache[$head_buffer];
            return;
        }
        $head_data = explode("\r\n", $head_buffer);
        foreach ($head_data as $content) {
            if (str_contains($content, ':')) {
                list($key, $value) = explode(':', $content, 2);
                $key = strtolower($key);
                $value = ltrim($value);
            } else {
                $key = strtolower($content);
                $value = '';
            }
            if (isset($this->_data['headers'][$key])) $this->_data['headers'][$key] = "{$this->_data['headers'][$key]},$value"; else    $this->_data['headers'][$key] = $value;
        }
        if ($cacheable) {
            $cache[$head_buffer] = $this->_data['headers'];
            if (count($cache) > 128) unset($cache[key($cache)]);
        }
    }

    /* A function that is returning a string. */
    public function rawHead()
    {
        if (!isset($this->_data['head'])) $this->_data['head'] = strstr($this->_buffer, "\r\n\r\n", true);
        return $this->_data['head'];
    }

    /*  */
    protected function parseUploadFiles($http_post_boundary)
    {
        $http_post_boundary = trim($http_post_boundary, '"');
        $buffer = $this->_buffer;
        $boday_position = strpos($buffer, "\r\n\r\n") + 4;
        $offset = $boday_position + strlen($http_post_boundary) + 2;
        $max_count = static::$maxFileUploads;
        while ($max_count-- > 0 && $offset) $offset = $this->parseUploadFile($http_post_boundary, $offset);
    }

    /* Parsing the file upload. */
    protected function parseUploadFile($boundary, $section_start_offset): int
    {
        $file = [];
        $boundary = "\r\n$boundary";
        $section_end_offset = strpos($this->_buffer, $boundary, $section_start_offset);
        if (!$section_end_offset) return 0;
        $content_lines_end_offset = strpos($this->_buffer, "\r\n\r\n", $section_start_offset);
        if (!$content_lines_end_offset || $content_lines_end_offset + 4 > $section_end_offset) return 0;
        $content_lines_str = substr($this->_buffer, $section_start_offset, $content_lines_end_offset - $section_start_offset);
        $content_lines = explode("\r\n", trim($content_lines_str . "\r\n"));
        $boundary_value = substr($this->_buffer, $content_lines_end_offset + 4, $section_end_offset - $content_lines_end_offset - 4);
        $upload_key = false;
        foreach ($content_lines as $content_line) {
            if (!strpos($content_line, ': ')) return 0;
            [$key, $value] = explode(': ', $content_line);
            switch (strtolower($key)) {
                case "content-disposition":
                    if (preg_match('/name="(.*?)"; filename="(.*?)"/i', $value, $match)) {
                        $error = 0;
                        $tmp_file = '';
                        $size = strlen($boundary_value);
                        $tmp_upload_dir = http::uploadTmpDir();
                        if (!$tmp_upload_dir) $error = UPLOAD_ERR_NO_TMP_DIR; else if ($boundary_value === '') $error = UPLOAD_ERR_NO_FILE; else {
                            $tmp_file = tempnam($tmp_upload_dir, 'yxorp.upload.');
                            if ($tmp_file === false || false == file_put_contents($tmp_file, $boundary_value)) $error = UPLOAD_ERR_CANT_WRITE;
                        }
                        $upload_key = $match[1];
                        $file = ['name' => $match[2], 'tmp_name' => $tmp_file, 'size' => $size, 'error' => $error, 'type' => null,];
                        break;
                    } else {
                        if (preg_match('/name="(.*?)"$/', $value, $match)) {
                            $k = $match[1];
                            $post_str = urlencode($k) . "=" . urlencode($boundary_value);
                            $post = [];
                            parse_str($post_str, $post);
                            if ($post) $this->_data['post'] = array_merge_recursive($this->_data['post'], $post);
                        }
                        return $section_end_offset + strlen($boundary) + 2;
                    }
                    break;
                case "content-type":
                    $file['type'] = trim($value);
                    break;
            }
        }
        if ($upload_key === false) return 0;
        $str = urlencode($upload_key) . "=1";
        $result = [];
        parse_str($str, $result);
        array_walk_recursive($result, function (&$value) use ($file) {
            $value = $file;
        });
        $this->_data['files'] = array_merge_recursive($this->_data['files'], $result);
        return $section_end_offset + strlen($boundary) + 2;
    }

    /* A method that returns a string. */
    public function rawBody(): string
    {
        return substr($this->_buffer, strpos($this->_buffer, "\r\n\r\n") + 4);
    }

    /* A function that is returning the name of the file. */
    public function file($name = null)
    {
        if (!isset($this->_data['files'])) $this->parsePost();
        if (null === $name) return $this->_data['files'];
        return $this->_data['files'][$name] ?? null;
    }

    /* A method declaration. */
    public function method()
    {
        if (!isset($this->_data['method'])) $this->parseHeadFirstLine();
        return $this->_data['method'];
    }

    /* A method that returns the protocol version. */
    public function protocolVersion()
    {
        if (!isset($this->_data['protocolVersion'])) $this->parseProtocolVersion();
        return $this->_data['protocolVersion'];
    }

    /* A comment. */
    protected function parseProtocolVersion()
    {
        $first_line = strstr($this->_buffer, "\r\n", true);
        $protoco_version = substr(strstr($first_line, 'HTTP/'), 5);
        $this->_data['protocolVersion'] = $protoco_version ?: '1.0';
    }

    /* A function that returns the hostname of the server. */
    public function host($without_port = false)
    {
        $host = $this->header('host');
        if ($host && $without_port && $pos = strpos($host, ':')) return substr($host, 0, $pos);
        return $host;
    }

    /* A method that returns the path of the file. */
    public function path()
    {
        if (!isset($this->_data['path'])) $this->_data['path'] = (string)parse_url($this->uri(), PHP_URL_PATH);
        return $this->_data['path'];
    }

    /*  */
    public function sessionRegenerateId($delete_old_session = false)
    {
        $session = $this->session();
        $session_data = $session->all();
        if ($delete_old_session) $session->flush();
        $new_sid = static::createSessionId();
        $session = new Session($new_sid);
        $session->put($session_data);
        $cookie_params = Session::getCookieParams();
        $session_name = Session::$name;
        $this->setSidCookie($session_name, $new_sid, $cookie_params);
    }

    /* Creating a function called session that returns a boolean or a Session object. */
    public function session(): bool|Session
    {
        if ($this->session === null) {
            $session_id = $this->sessionId();
            if ($session_id === false) return false;
            $this->session = new Session($session_id);
        }
        return $this->session;
    }

    /*  */
    public function sessionId($session_id = null)
    {
        if ($session_id) unset($this->sid);
        if (!isset($this->sid)) {
            $session_name = Session::$name;
            $sid = $session_id ? '' : $this->cookie($session_name);
            if ($sid === '' || $sid === null) {
                if ($this->connection === null) {
                    Worker::safeEcho('request->session() fail, header already send');
                    return false;
                }
                $sid = $session_id ?: static::createSessionId();
                $cookie_params = Session::getCookieParams();
                $this->setSidCookie($session_name, $sid, $cookie_params);
            }
            $this->sid = $sid;
        }
        return $this->sid;
    }

    /*  */
    public function cookie($name = null, $default = null)
    {
        if (!isset($this->_data['cookie'])) {
            $this->_data['cookie'] = [];
            parse_str(preg_replace('/; ?/', '&', $this->header('cookie', '')), $this->_data['cookie']);
        }
        if ($name === null) return $this->_data['cookie'];
        return $this->_data['cookie'][$name] ?? $default;
    }

    /**
     * @throws Exception
     */
    public static function createSessionId(): string
    {
        return bin2hex(pack('d', microtime(true)) . random_bytes(8));
    }

    /*  */
    protected function setSidCookie(string $session_name, string $sid, array $cookie_params)
    {
        $this->connection->__header['Set-Cookie'] = [$session_name . '=' . $sid . (empty($cookie_params['domain']) ? '' : '; Domain=' . $cookie_params['domain']) . (empty($cookie_params['lifetime']) ? '' : '; Max-Age=' . $cookie_params['lifetime']) . (empty($cookie_params['path']) ? '' : '; Path=' . $cookie_params['path']) . (empty($cookie_params['samesite']) ? '' : '; SameSite=' . $cookie_params['samesite']) . (!$cookie_params['secure'] ? '' : '; Secure') . (!$cookie_params['httponly'] ? '' : '; HttpOnly')];
    }

    /* A method that returns the raw buffer. */
    public function rawBuffer()
    {
        return $this->_buffer;
    }

    /* A magic method that is called when a non-existent or inaccessible property is called. */
    public function __get($name)
    {
        return $this->properties[$name] ?? null;
    }

    /* A magic method that allows you to set a property that does not exist. */
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    /* Checking if the property is set. */
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    /* A magic method that is called when you try to unset a property that does not exist. */
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    /* A magic method that is called when the object is used in a string context. */
    public function __toString()
    {
        return $this->_buffer;
    }

    /* Destructor */
    public function __destruct()
    {
        if (isset($this->_data['files'])) {
            clearstatcache();
            array_walk_recursive($this->_data['files'], function ($value, $key) {
                if ($key === 'tmp_name') if (is_file($value)) unlink($value);
            });
        }
    }
}