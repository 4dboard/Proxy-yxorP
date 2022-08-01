<?php namespace yxorP\app\lib\proxy\Cookie;

use RuntimeException;

class sessionCookieJar extends cookieJar
{
    private $sessionKey;
    private $storeSessionCookies;

    public function __construct($sessionKey, $storeSessionCookies = false)
    {
        parent::__construct();
        $this->sessionKey = $sessionKey;
        $this->storeSessionCookies = $storeSessionCookies;
        $this->load();
    }

    public function __destruct()
    {
        $this->save();
    }

    public function save()
    {
        $json = [];
        foreach ($this as $cookie) {
            if (cookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
                $json[] = $cookie->toArray();
            }
        }
        $_SESSION[$this->sessionKey] = json_encode($json);
    }

    protected function load()
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            return;
        }
        $data = json_decode($_SESSION[$this->sessionKey], true);
        if (is_array($data)) {
            foreach ($data as $cookie) {
                $this->setCookie(new sessionCookieJar($cookie));
            }
        } elseif (strlen($data)) {
            throw new RuntimeException("Invalid cookie data");
        }
    }
}
