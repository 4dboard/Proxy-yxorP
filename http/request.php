<?php namespace yxorP\http;

/* Importing the namespace `yxorP` into the current namespace. */

use yxorP;
use yxorP\inc\constants;
use yxorP\inc\generalHelper;

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
        $url = preg_replace(REG_TWO, CHAR_EMPTY_STRING, $url);
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
        self::onBuildContext();
        $method = constants::get(YXORP_SERVER)[YXORP_REQUEST_METHOD];
        $scheme = (isset(constants::get(YXORP_SERVER)[YXORP_HTTPS]) && constants::get(YXORP_SERVER)[YXORP_HTTPS]) ? YXORP_HTTPS : VAR_HTTP;
        $url = $scheme . ':' . constants::get(YXORP_PROXY_URL)->__toString();
        $request = new request($method, $url);
        foreach (constants::get(YXORP_SERVER) as $name => $value) if (str_starts_with($name, YXORP_HTTP_)) {
            $name = substr($name, 5);
            $name = str_replace(CHAR_UNDER, ' ', $name);
            $name = ucwords(strtolower($name));
            $name = str_replace(' ', ' - ', $name);
            $request->headers->set($name, $value);
        }
        $request->params->set(VAR_USER_IP, constants::get(YXORP_SERVER)[YXORP_REMOTE_ADDR]);
        if (count($_FILES) > 0) {
            $request->post->replace($_POST);
            $request->files->replace($_FILES);
        } else if (count($_POST) > 0) $request->post->replace($_POST);
        $request->prepare();
        return $request;
    }

    /* Creating a new request from the global variables. */

    public static function onBuildContext(): void
    {
        /* Setting the `SITE_URL` variable to the value of the `SERVER_NAME` key in the `YXORP_SERVER` array. */
        constants::set(YXORP_SITE_URL, constants::get(YXORP_SERVER)[YXORP_SERVER_NAME]);
        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        constants::set(YXORP_SITE_DOMAIN, generalHelper::extractDomain(constants::get(YXORP_SITE_URL)));
        /* Setting the `TARGET` variable to the result of the `findOne` method. */

        print_r(constants::get(YXORP_SERVER)['DOCUMENT_ROOT']);
        exit;
        constants::set(YXORP_TARGET, constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . COCKPIT_SITES, [COCKPIT_HOST => constants::get(YXORP_SITE_DOMAIN)]));
        /* Setting the `SITE_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        constants::set(YXORP_SITE_SUB_DOMAIN, generalHelper::extractSubdomains(constants::get(YXORP_SITE_URL)));
        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        constants::set(YXORP_TARGET_URL, constants::get(YXORP_TARGET)[YXORP_TARGET]);
        /* Setting the `TARGET_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        constants::set(YXORP_TARGET_SUB_DOMAIN, generalHelper::extractSubdomains(constants::get(YXORP_TARGET_URL)));
        /* Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        constants::set(YXORP_TARGET_DOMAIN, generalHelper::extractDomain(constants::get(YXORP_TARGET_URL)));
        /* Setting the `FETCH` variable to the value of the `SITE_SUB_DOMAIN` variable, if it is not null, and the
        `TARGET_DOMAIN` variable, with the `https://` protocol. */
        constants::set(YXORP_FETCH, VAR_HTTPS . CHAR_SLASH . CHAR_SLASH . ((!is_null(constants::get(YXORP_SITE_SUB_DOMAIN))) ? (constants::get(YXORP_SITE_SUB_DOMAIN)->__toString() . ".") : null) . constants::get(YXORP_TARGET_DOMAIN)->__toString());
        /* Setting the `PROXY_URL` variable to the value of the `FETCH` variable, with the value of the `YXORP_REQUEST_URI`
        variable appended to it. */
        constants::set(YXORP_PROXY_URL, constants::get(YXORP_FETCH)->__toString() . constants::get(YXORP_REQUEST_URI)->__toString());
        /* Setting the `DIR_FULL` variable to the value of the `DIR_ROOT` constant, with the `override` string appended
        to it, with the `CHAR_SLASH` constant appended to it, with the value of the `files` key in the `TARGET`
        array appended to it. */
        constants::set(YXORP_DIR_FULL, DIR_ROOT . DIR_OVERRIDE . constants::get(YXORP_TARGET)[YXORP_FILES]);
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

    #[Pure] public function getUrl(): string
    {
        return constants::get(YXORP_PROXY_URL);
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