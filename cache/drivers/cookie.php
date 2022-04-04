<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

class cache_cookie extends BaseCache implements cache_driver
{

    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }
        if (class_exists("Redis")) {
            $this->instant = new Redis();
        }

    }

    public function checkdriver(): bool
    {

        if (function_exists("setcookie")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        $this->connectServer();
        $keyword = "cache_" . $keyword;
        return @setcookie($keyword, $this->encode($value), $time, "/");

    }

    public function connectServer(): void
    {

        if (!isset($_COOKIE['cache']) && !@setcookie("cache", 1, 10)) {
            $this->fallback = true;
        }

    }

    public function driver_get($keyword, $option = array())
    {
        $this->connectServer();
        $keyword = "cache_" . $keyword;
        $x = isset($_COOKIE[$keyword]) ? $this->decode($_COOKIE['keyword']) : false;
        if ($x === false) {
            return null;
        }

        return $x;
    }

    public function driver_delete($keyword, $option = array())
    {
        $this->connectServer();
        $keyword = "cache_" . $keyword;
        @setcookie($keyword, null, -10);
        $_COOKIE[$keyword] = null;
    }

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "array"])] public function driver_stats($option = array()): array
    {
        $this->connectServer();
        return array(
            "info" => "",
            "size" => "",
            "data" => $_COOKIE,
        );

    }

    public function driver_clean($option = array())
    {
        $this->connectServer();
        foreach ($_COOKIE as $keyword => $value) {
            if (str_contains($keyword, "cache")) {
                @setcookie($keyword, null, -10);
                $_COOKIE[$keyword] = null;
            }
        }
    }

    public function driver_isExisting($keyword): bool
    {
        $this->connectServer();
        $x = $this->get($keyword);

        return !($x === null);
    }
}