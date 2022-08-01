<?php namespace yxorP\app\lib\proxy;

use Exception;
use InvalidArgumentException;
use yxorP\app\lib\proxy\cookie\cookieJar;
use yxorP\app\lib\proxy\promise;
use yxorP\app\lib\proxy\psr7;
use yxorP\app\lib\psr\http\message\requestInterface;


class client implements clientInterface
{
    private $config;

    public function __construct(array $config = [])
    {
        if (!isset($config['handler'])) {
            $config['handler'] = handlerStack::create();
        } elseif (!is_callable($config['handler'])) {
            throw new InvalidArgumentException('handler must be a callable');
        }
        if (isset($config['base_uri'])) {
            $config['base_uri'] = Psr7\uri_for($config['base_uri']);
        }
        $this->configureDefaults($config);
    }

    public function __call($method, $args)
    {
        if (count($args) < 1) {
            throw new InvalidArgumentException('Magic request methods require a URI and optional options array');
        }
        $uri = $args[0];
        $opts = isset($args[1]) ? $args[1] : [];
        return substr($method, -5) === 'Async' ? $this->requestAsync(substr($method, 0, -5), $uri, $opts) : $this->request($method, $uri, $opts);
    }

    public function requestAsync($method, $uri = '', array $options = [])
    {
        $options = $this->prepareDefaults($options);
        $headers = isset($options['headers']) ? $options['headers'] : [];
        $body = isset($options['body']) ? $options['body'] : null;
        $version = isset($options['version']) ? $options['version'] : '1.1';
        $uri = $this->buildUri($uri, $options);
        if (is_array($body)) {
            $this->invalidBody();
        }
        $request = new Psr7\request($method, $uri, $headers, $body, $version);
        unset($options['headers'], $options['body'], $options['version']);
        return $this->transfer($request, $options);
    }

    public function request($method, $uri = '', array $options = [])
    {
        $options[requestOptions::SYNCHRONOUS] = true;
        return $this->requestAsync($method, $uri, $options)->wait();
    }

    public function send(requestInterface $request, array $options = [])
    {
        $options[requestOptions::SYNCHRONOUS] = true;
        return $this->sendAsync($request, $options)->wait();
    }

    public function sendAsync(requestInterface $request, array $options = [])
    {
        $options = $this->prepareDefaults($options);
        return $this->transfer($request->withUri($this->buildUri($request->getUri(), $options), $request->hasHeader('Host')), $options);
    }

    public function getConfig($option = null)
    {
        return $option === null ? $this->config : (isset($this->config[$option]) ? $this->config[$option] : null);
    }

    private function configureDefaults(array $config)
    {
        $defaults = ['allow_redirects' => redirectMiddleware::$defaultSettings, 'http_errors' => true, 'decode_content' => true, 'verify' => true, 'cookies' => false, 'idn_conversion' => true,];
        if (php_sapi_name() === 'cli' && getenv('HTTP_PROXY')) {
            $defaults['proxy']['http'] = getenv('HTTP_PROXY');
        }
        if ($proxy = getenv('HTTPS_PROXY')) {
            $defaults['proxy']['https'] = $proxy;
        }
        if ($noProxy = getenv('NO_PROXY')) {
            $cleanedNoProxy = str_replace(' ', '', $noProxy);
            $defaults['proxy']['no'] = explode(',', $cleanedNoProxy);
        }
        $this->config = $config + $defaults;
        if (!empty($config['cookies']) && $config['cookies'] === true) {
            $this->config['cookies'] = new cookieJar();
        }
        if (!isset($this->config['headers'])) {
            $this->config['headers'] = ['User-Agent' => default_user_agent()];
        } else {
            foreach (array_keys($this->config['headers']) as $name) {
                if (strtolower($name) === 'user-agent') {
                    return;
                }
            }
            $this->config['headers']['User-Agent'] = default_user_agent();
        }
    }

    private function prepareDefaults(array $options)
    {
        $defaults = $this->config;
        if (!empty($defaults['headers'])) {
            $defaults['_conditional'] = $defaults['headers'];
            unset($defaults['headers']);
        }
        if (array_key_exists('headers', $options)) {
            if ($options['headers'] === null) {
                $defaults['_conditional'] = [];
                unset($options['headers']);
            } elseif (!is_array($options['headers'])) {
                throw new InvalidArgumentException('headers must be an array');
            }
        }
        $result = $options + $defaults;
        foreach ($result as $k => $v) {
            if ($v === null) {
                unset($result[$k]);
            }
        }
        return $result;
    }

    private function buildUri($uri, array $config)
    {
        $uri = Psr7\uri_for($uri === null ? '' : $uri);
        if (isset($config['base_uri'])) {
            $uri = Psr7\uriResolver::resolve(Psr7\uri_for($config['base_uri']), $uri);
        }
        if (isset($config['idn_conversion']) && ($config['idn_conversion'] !== false)) {
            $idnOptions = ($config['idn_conversion'] === true) ? IDNA_DEFAULT : $config['idn_conversion'];
            $uri = utils::idnUriConvert($uri, $idnOptions);
        }
        return $uri->getScheme() === '' && $uri->getHost() !== '' ? $uri->withScheme('http') : $uri;
    }

    private function invalidBody()
    {
        throw new InvalidArgumentException('Passing in the "body" request ' . 'option as an array to send a POST request has been deprecated. ' . 'Please use the "form_params" request option to send a ' . 'application/x-www-form-urlencoded request, or the "multipart" ' . 'request option to send a multipart/form-data request.');
    }

    private function transfer(requestInterface $request, array $options)
    {
        if (isset($options['save_to'])) {
            $options['sink'] = $options['save_to'];
            unset($options['save_to']);
        }
        if (isset($options['exceptions'])) {
            $options['http_errors'] = $options['exceptions'];
            unset($options['exceptions']);
        }
        $request = $this->applyOptions($request, $options);
        $handler = $options['handler'];
        try {
            return Promise\promise_for($handler($request, $options));
        } catch (Exception $e) {
            return Promise\rejection_for($e);
        }
    }

    private function applyOptions(requestInterface $request, array &$options)
    {
        $modify = ['set_headers' => [],];
        if (isset($options['headers'])) {
            $modify['set_headers'] = $options['headers'];
            unset($options['headers']);
        }
        if (isset($options['form_params'])) {
            if (isset($options['multipart'])) {
                throw new InvalidArgumentException('You cannot use ' . 'form_params and multipart at the same time. Use the ' . 'form_params option if you want to send application/' . 'x-www-form-urlencoded requests, and the multipart ' . 'option to send multipart/form-data requests.');
            }
            $options['body'] = http_build_query($options['form_params'], '', '&');
            unset($options['form_params']);
            $options['_conditional'] = Psr7\_caseless_remove(['Content-Type'], $options['_conditional']);
            $options['_conditional']['Content-Type'] = 'application/x-www-form-urlencoded';
        }
        if (isset($options['multipart'])) {
            $options['body'] = new Psr7\multipartStream($options['multipart']);
            unset($options['multipart']);
        }
        if (isset($options['json'])) {
            $options['body'] = json_encode($options['json']);
            unset($options['json']);
            $options['_conditional'] = Psr7\_caseless_remove(['Content-Type'], $options['_conditional']);
            $options['_conditional']['Content-Type'] = 'application/json';
        }
        if (!empty($options['decode_content']) && $options['decode_content'] !== true) {
            $options['_conditional'] = Psr7\_caseless_remove(['Accept-Encoding'], $options['_conditional']);
            $modify['set_headers']['Accept-Encoding'] = $options['decode_content'];
        }
        if (isset($options['body'])) {
            if (is_array($options['body'])) {
                $this->invalidBody();
            }
            $modify['body'] = Psr7\stream_for($options['body']);
            unset($options['body']);
        }
        if (!empty($options['auth']) && is_array($options['auth'])) {
            $value = $options['auth'];
            $type = isset($value[2]) ? strtolower($value[2]) : 'basic';
            switch ($type) {
                case 'basic':
                    $modify['set_headers'] = Psr7\_caseless_remove(['Authorization'], $modify['set_headers']);
                    $modify['set_headers']['Authorization'] = 'Basic ' . base64_encode("$value[0]:$value[1]");
                    break;
                case 'digest':
                    $options['curl'][CURLOPT_HTTPAUTH] = CURLAUTH_DIGEST;
                    $options['curl'][CURLOPT_USERPWD] = "$value[0]:$value[1]";
                    break;
                case 'ntlm':
                    $options['curl'][CURLOPT_HTTPAUTH] = CURLAUTH_NTLM;
                    $options['curl'][CURLOPT_USERPWD] = "$value[0]:$value[1]";
                    break;
            }
        }
        if (isset($options['query'])) {
            $value = $options['query'];
            if (is_array($value)) {
                $value = http_build_query($value, null, '&', PHP_QUERY_RFC3986);
            }
            if (!is_string($value)) {
                throw new InvalidArgumentException('query must be a string or array');
            }
            $modify['query'] = $value;
            unset($options['query']);
        }
        if (isset($options['sink'])) {
            if (is_bool($options['sink'])) {
                throw new InvalidArgumentException('sink must not be a boolean');
            }
        }
        $request = Psr7\modify_request($request, $modify);
        if ($request->getBody() instanceof Psr7\multipartStream) {
            $options['_conditional'] = Psr7\_caseless_remove(['Content-Type'], $options['_conditional']);
            $options['_conditional']['Content-Type'] = 'multipart/form-data; boundary=' . $request->getBody()->getBoundary();
        }
        if (isset($options['_conditional'])) {
            $modify = [];
            foreach ($options['_conditional'] as $k => $v) {
                if (!$request->hasHeader($k)) {
                    $modify['set_headers'][$k] = $v;
                }
            }
            $request = Psr7\modify_request($request, $modify);
            unset($options['_conditional']);
        }
        return $request;
    }
}
