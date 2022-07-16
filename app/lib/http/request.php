<?php namespace yxorP\app\lib\http;

/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\Pure;
use yxorP;
use yxorP\app\constants;
use yxorP\app\yP;

/* A class that represents an HTTP request. */

/**
 * @property array|string|string[]|null $url
 */
class request
{
    public ParamStore $params;
    public ParamStore $headers;
    public ParamStore $post;
    public ParamStore $get;
    public ParamStore $files;
    private string $method;
    private string $protocol_version = '1.1';
    private $body;
    private $prepared_body;

    /* The constructor of the class. */
    public function __construct($method, $url, $body = null)
    {
        $this->params = new ParamStore();
        $this->headers = new ParamStore();
        $this->post = new ParamStore(null, true);
        $this->get = new ParamStore(null, true);
        $this->files = new ParamStore(null, true);
        $this->setMethod($method);
        $this->setUrl($url);
        $this->setBody($body);
        $this->prepare();
    }

    /* Setting the URL of the request. */

    public function setUrl($url): void
    {
        $query = parse_url($url, PHP_URL_QUERY);
        if ($query) {
            $url = str_replace('?' . $query, CHAR_EMPTY_STRING, $url);
            $url = preg_replace(REG_ONE, CHAR_EMPTY_STRING, $url);
            $result = self::parseQuery($query);
            $this->get->replace($result);
        }
        $this->url = $url;
        $this->headers->set('host', parse_url($url, PHP_URL_HOST));
    }

    /* Parsing a query string into an array. */

    public static function parseQuery($query): array
    {
        $result = array();
        parse_str($query, $result);
        return $result;
    }


    /* A method that is called by the wrapper class. */

    public function setBody($body, $content_type = false): void
    {
        $this->post->clear();
        $this->files->clear();
        if (is_array($body)) $body = http_build_query($body);
        $this->body = (string)$body;
        if ($content_type) $this->headers->set(VAR_CONTENT_TYPE, $content_type);
        $this->prepare();
    }

    /* Setting the body of the request. */

    public function prepare(): void
    {
        if ($this->files->all()) {
            $boundary = self::generateBoundary();
            $this->prepared_body = self::buildPostBody($this->post->all(), $this->files->all(), $boundary);
            $this->headers->set(VAR_CONTENT_TYPE, 'multipart/form-data; boundary=' . $boundary);
        } else if ($this->post->all()) {
            $this->prepared_body = http_build_query($this->post->all());
            $this->headers->set(VAR_CONTENT_TYPE, VAR_APPLICATION_URLENCODED);
        } else {
            $this->headers->set(VAR_CONTENT_TYPE, $this->detectContentType($this->body));
            $this->prepared_body = $this->body;
        }

        $len = strlen($this->prepared_body);

        if ($len > 0) $this->headers->set(VAR_CONTENT_LENGTH, $len); else {
            $this->headers->remove(VAR_CONTENT_LENGTH);
            $this->headers->remove(VAR_CONTENT_TYPE);
        }
    }

    /* Preparing the body of the request. */

    private static function generateBoundary(): string
    {
        return '-----' . md5(microtime() . mt_rand());
    }

    /* Generating a boundary for the multipart/form-data request. */

    public static function buildPostBody($fields, $files, $boundary = null): string
    {
        $part_field = "--%s\r\nContent-Disposition: form-data; name=\"%s\"\r\n\r\n";
        $part_file = "--%s\r\nContent-Disposition: form-data; name=\"%s\"; filename=\"%s\"\r\nContent-Type: %s\r\n\r\n";
        if (!$boundary) $boundary = self::generateBoundary();
        $body = CHAR_EMPTY_STRING;
        foreach ($fields as $name => $value) if (is_array($value)) {
            foreach ($value as $v) {
                $body .= sprintf($part_field, $boundary, (string)$name, $v);
                $body .= "$v\r\n";
            }
        } else {
            $body .= sprintf($part_field, $boundary, $name, $value);
            $body .= "$value\r\n";
        }
        foreach ($files as $name => $values) {
            if (!is_array($values[VAR_TMP_NAME])) {
                $multiValues = array_map(static function ($a) {
                    return (array)$a;
                }, $values);
                $fieldName = $name;
            } else {
                $multiValues = $values;
                $fieldName = (string)$name;
            }
            foreach (array_keys($multiValues[VAR_TMP_NAME]) as $key) {
                if (!$multiValues[VAR_TMP_NAME][$key] || $multiValues[VAR_ERROR][$key] !== 0 || !is_readable($multiValues[VAR_TMP_NAME][$key])) {
                    continue;
                }
                $body .= sprintf($part_file, $boundary, $fieldName, $multiValues['name'][$key], $multiValues[VAR_TYPE][$key]);
                $body .= file_get_contents($multiValues[VAR_TMP_NAME][$key]);
                $body .= "\r\n";
            }
        }
        $body .= "--$boundary--\r\n\r\n";
        return $body;
    }

    /* Building the body of the request. */

    private function detectContentType($data): string
    {
        $content_type = 'application/octet-stream';
        if (preg_match('/^{\s*"[^"]+"\s*:/', $data))
            $content_type = 'application/json'; else if (preg_match('/^<\?xml[^?>]+\?>\s*<[^>]+>/i', $data))
            $content_type = 'application/xml'; else if (preg_match('/^[a-zA-Z0-9_.~-]+=[^&]*&/', $data))
            $content_type = VAR_APPLICATION_URLENCODED;
        return $content_type;
    }

    /* Detecting the content type of the request. */

    public static function createFromGlobals(): request
    {
        $method = (yP::get(VAR_SERVER))[YXORP_REQUEST_METHOD];
        $scheme = (isset(yP::get(VAR_SERVER)[VAR_HTTPS]) && (yP::get(VAR_SERVER))[VAR_HTTPS]) ? VAR_HTTPS : VAR_HTTP;
        $url = $scheme . ':' .() (defined(YXORP_GUZZLE_URL)) ? YXORP_GUZZLE_URL : null);
        $request = new request($method, $url);
        foreach (yP::get(VAR_SERVER) as $name => $value) if (str_starts_with($name, YXORP_HTTP_)) {
            $name = substr($name, 5);
            $name = str_replace(CHAR_UNDER, ' ', $name);
            $name = ucwords(strtolower($name));
            $name = str_replace(' ', ' - ', $name);
            $request->headers->set($name, $value);
        }
        $request->params->set(VAR_USER_IP, (yP::get(VAR_SERVER))[YXORP_REMOTE_ADDR]);
        if (count($_FILES) > 0) {
            $request->post->replace($_POST);
            $request->files->replace($_FILES);
        } else if (count($_POST) > 0) $request->post->replace($_POST);
        $request->prepare();
        return $request;
    }


    /* A getter method for the `$method` property. */

    public function getMethod(): string
    {
        return $this->method;
    }

    /* Setting the method of the request. */

    public function setMethod($method): void
    {
        $this->method = strtoupper($method);
    }

    /* A getter method for the `$url` property. */

    #[Pure] public function getUrl(): ?string
    {
        return (MIME === 'text' . CHAR_SLASH . 'html' && defined(YXORP_GUZZLE_URL)) ? YXORP_GUZZLE_URL : null;
    }

    /* A getter method for the `$protocol_version` property. */

    public function getProtocolVersion(): string
    {
        return $this->protocol_version;
    }

    /* Getting the raw headers of the request. */

    public function getRawHeaders(): string
    {
        $result = array();
        $headers = $this->headers->all();
        ksort($headers);
        foreach ($headers as $name => $values) foreach ((array)$values as $value) {
            $name = implode(CHAR_DASH, array_map(VAR_UCFIRST, explode(CHAR_DASH, $name)));
            $result[] = sprintf("%s: %s", $name, $value);
        }
        return implode("\r\n", $result);
    }

    /* Returning the prepared body of the request. */

    public function getRawBody(): string
    {
        return $this->prepared_body;
    }

    /* An alias for `public function getUrl()`. */

    public function getUri()
    {
        return call_user_func_array(array($this, "getUrl"), func_get_args());
    }
}