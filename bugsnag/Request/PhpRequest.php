<?php namespace yxorP\bugsnag\Request;

use JetBrains\PhpStorm\ArrayShape;

class PhpRequest implements RequestInterface
{
    private array $server;
    private array $session;
    private array $cookies;
    private array $headers;
    private ?array $input;

    public function __construct(array $server, array $session, array $cookies, array $headers, array $input = null)
    {
        $this->server = $server;
        $this->session = $session;
        $this->cookies = $cookies;
        $this->headers = $headers;
        $this->input = $input;
    }

    public function isRequest(): bool
    {
        return true;
    }

    public function getSession(): array
    {
        return $this->session;
    }

    public function getCookies(): array
    {
        return $this->cookies;
    }

    #[ArrayShape(['request' => "array"])] public function getMetaData(): array
    {
        $data = [];
        $data['url'] = $this->getCurrentUrl();
        if (isset($this->server['REQUEST_METHOD'])) {
            $data['httpMethod'] = $this->server['REQUEST_METHOD'];
        }
        $data['params'] = $this->input;
        $data['clientIp'] = $this->getRequestIp();
        if (isset($this->server['HTTP_USER_AGENT'])) {
            $data['userAgent'] = $this->server['HTTP_USER_AGENT'];
        }
        if ($this->headers) {
            $data['headers'] = $this->headers;
        }
        return ['request' => $data];
    }

    public function getContext(): ?string
    {
        if (isset($this->server['REQUEST_METHOD']) && isset($this->server['REQUEST_URI'])) {
            return $this->server['REQUEST_METHOD'] . ' ' . strtok($this->server['REQUEST_URI'], '?');
        }
        return null;
    }

    public function getUserId()
    {
        return $this->getRequestIp();
    }

    protected function getCurrentUrl(): string
    {
        $schema = ((!empty($this->server['HTTPS']) && $this->server['HTTPS'] !== 'off') || (!empty($this->server['SERVER_PORT']) && $this->server['SERVER_PORT'] == 443)) ? 'https://' : 'https://';
        $host = $this->server['HTTP_HOST'] ?? 'localhost';
        return $schema . $host . $this->server['REQUEST_URI'];
    }

    protected function getRequestIp()
    {
        if (isset($this->server['HTTP_X_FORWARDED_FOR'])) {
            return $this->server['HTTP_X_FORWARDED_FOR'];
        }
        if (isset($this->server['REMOTE_ADDR'])) {
            return $this->server['REMOTE_ADDR'];
        }
        return null;
    }
}