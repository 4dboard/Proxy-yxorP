<?php namespace yxorP\app\lib\proxy\cookie;

use RuntimeException;

class fileCookieJar extends cookieJar
{
    private $filename;
    private $storeSessionCookies;

    public function __construct($cookieFile, $storeSessionCookies = false)
    {
        parent::__construct();
        $this->filename = $cookieFile;
        $this->storeSessionCookies = $storeSessionCookies;
        if (file_exists($cookieFile)) $this->load($cookieFile);
    }

    public function load($filename)
    {
        $json = file_get_contents($filename);
        if (false === $json) {
            throw new RuntimeException("Unable to load file {$filename}");
        } elseif ($json === '') {
            return;
        }
        $data = \yxorP\app\lib\proxy\json_decode($json, true);
        if (is_array($data)) {
            foreach (json_decode($json, true) as $cookie) {
                $this->setCookie(new setCookie($cookie));
            }
        } elseif (strlen($data)) {
            throw new RuntimeException("Invalid cookie file: {$filename}");
        }
    }

    public function __destruct()
    {
        $this->save($this->filename);
    }

    public function save($filename)
    {
        $json = [];
        foreach ($this as $cookie) {
            if (cookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
                $json[] = $cookie->toArray();
            }
        }
        $jsonStr = \yxorP\app\lib\proxy\json_encode($json);
        if (false === file_put_contents($filename, $jsonStr, LOCK_EX)) {
            throw new RuntimeException("Unable to save file {$filename}");
        }
    }
}
