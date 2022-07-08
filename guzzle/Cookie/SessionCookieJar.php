<?php namespace GuzzleHttp\Cookie;

use RuntimeException;

class SessionCookieJar extends CookieJar
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

    protected function load()
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            return;
        }
        $data = json_decode($_SESSION[$this->sessionKey], true);
        if (is_array($data)) {
            foreach ($data as $cookie) {
                $this->setCookie(new SetCookie($cookie));
            }
        } elseif (strlen($data)) {
            throw new RuntimeException("Invalid cookie data");
        }
    }

    public function __destruct()
    {
        $this->save();
    }

    public function save()
    {
        $json = [];
        foreach ($this as $cookie) {
            if (CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
                $json[] = $cookie->toArray();
            }
        }
        $_SESSION[$this->sessionKey] = json_encode($json);
    }
}