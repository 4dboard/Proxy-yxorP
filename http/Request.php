<?php /* yxorP */

namespace yxorP\Http;


/**
 * @property $protocol_version
 * @property string|string[]|null $url
 * @property string $method
 * @property string $prepared_body
 * @property string $body
 */
class Request
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

    public function setUrl($url): void
    {
        $url = preg_replace('/#.*/', '', $url);

        $query = parse_url($url, PHP_URL_QUERY);

        if ($query) {
            $url = str_replace('?' . $query, '', $url);
            $url = preg_replace('/\?.*/', '', $url);

            $result = self::parseQuery($query);
            $this->get->replace($result);
        }

        $this->url = $url;
        $this->headers->set('host', parse_url($url, PHP_URL_HOST));
    }

    public static function parseQuery($query): array
    {
        $result = array();
        parse_str($query, $result);

        return $result;
    }

    public function setBody($body, $content_type = false): void
    {

        $this->post->clear();
        $this->files->clear();

        if (is_array($body)) {
            $body = http_build_query($body);
        }

        $this->body = (string)$body;

        if ($content_type) {
            $this->headers->set('content-type', $content_type);
        }

        $this->prepare();
    }

    public function prepare(): void
    {
        if ($this->files->all()) {

            $boundary = self::generateBoundary();

            $this->prepared_body = self::buildPostBody($this->post->all(), $this->files->all(), $boundary);
            $this->headers->set('content-type', 'multipart/form-data; boundary=' . $boundary);

        } else if ($this->post->all()) {

            $this->prepared_body = http_build_query($this->post->all());
            $this->headers->set('content-type', 'application/x-www-form-urlencoded');

        } else {

            $this->headers->set('content-type', $this->detectContentType($this->body));
            $this->prepared_body = $this->body;
        }
        $len = strlen($this->prepared_body);

        if ($len > 0) {
            $this->headers->set('content-length', $len);
        } else {
            $this->headers->remove('content-length');
            $this->headers->remove('content-type');
        }
    }

    private static function generateBoundary(): string
    {
        return '-----' . md5(microtime() . mt_rand());
    }

    public static function buildPostBody($fields, $files, $boundary = null): string
    {

        $part_field = "--%s\r\nContent-Disposition: form-data; name=\"%s\"\r\n\r\n";
        $part_file = "--%s\r\nContent-Disposition: form-data; name=\"%s\"; filename=\"%s\"\r\nContent-Type: %s\r\n\r\n";
        if (!$boundary) {
            $boundary = self::generateBoundary();
        }

        $body = '';

        foreach ($fields as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $v) {
                    $body .= sprintf($part_field, $boundary, (string)$name, $v);
                    $body .= "$v\r\n";
                }
            } else {
                $body .= sprintf($part_field, $boundary, $name, $value);
                $body .= "$value\r\n";
            }
        }

        foreach ($files as $name => $values) {
            if (!is_array($values['tmp_name'])) {
                $multiValues = array_map(static function ($a) {
                    return (array)$a;
                }, $values);
                $fieldName = $name;
            } else {
                $multiValues = $values;
                $fieldName = (string)$name;
            }
            foreach (array_keys($multiValues['tmp_name']) as $key) {
                if (!$multiValues['tmp_name'][$key] || $multiValues['error'][$key] !== 0 || !is_readable($multiValues['tmp_name'][$key])) {
                    continue;
                }
                $body .= sprintf($part_file, $boundary, $fieldName, $multiValues['name'][$key], $multiValues['type'][$key]);
                $body .= file_get_contents($multiValues['tmp_name'][$key]);
                $body .= "\r\n";
            }
        }
        $body .= "--$boundary--\r\n\r\n";

        return $body;
    }

    private function detectContentType($data): string
    {

        $content_type = 'application/octet-stream';

        if (preg_match('/^{\s*"[^"]+"\s*:/', $data)) {
            $content_type = 'application/json';
        } else if (preg_match('/^<\?xml[^?>]+\?>\s*<[^>]+>/i', $data)) {
            $content_type = 'application/xml';
        } else if (preg_match('/^[a-zA-Z0-9_.~-]+=[^&]*&/', $data)) {
            $content_type = 'application/x-www-form-urlencoded';
        }

        return $content_type;
    }

    public static function createFromGlobals(): Request
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ? 'https' : 'http';

        $url = $scheme . ':' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $request = new Request($method, $url);

        foreach ($_SERVER as $name => $value) {

            if (str_starts_with($name, 'HTTP_')) {

                $name = substr($name, 5);
                $name = str_replace('_', ' ', $name);
                $name = ucwords(strtolower($name));
                $name = str_replace(' ', '-', $name);

                $request->headers->set($name, $value);
            }
        }

        $request->params->set('user-ip', $_SERVER['REMOTE_ADDR']);

        if (count($_FILES) > 0) {
            $request->post->replace($_POST);
            $request->files->replace($_FILES);
        } else if (count($_POST) > 0) {
            $request->post->replace($_POST);
        }

        $request->prepare();

        return $request;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod($method): void
    {
        $this->method = strtoupper($method);
    }

    public function getUrl(): string
    {
        return $GLOBALS['PROXY_URL'];
    }

    public function getProtocolVersion(): string
    {
        return $this->protocol_version;
    }

    public function getRawHeaders(): string
    {

        $result = array();

        $headers = $this->headers->all();

        ksort($headers);

        foreach ($headers as $name => $values) {

            foreach ((array)$values as $value) {
                $name = implode('-', array_map('ucfirst', explode('-', $name)));
                $result[] = sprintf("%s: %s", $name, $value);
            }
        }

        return implode("\r\n", $result);
    }

    public function getRawBody(): string
    {
        return $this->prepared_body;
    }

    public function getUri()
    {
        return call_user_func_array(array($this, "getUrl"), func_get_args());
    }
}
