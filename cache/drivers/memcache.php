<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

class cache_memcache extends BaseCache implements cache_driver
{
    public $instant;

    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }
        if (class_exists("Memcache")) {
            $this->instant = new Memcache();
        } else {
            $this->fallback = true;
        }

    }

    public function checkdriver(): bool
    {

        if (function_exists("memcache_connect")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set(
        $keyword,
        $value = "",
        $time = 300,
        $option = array()
    ): bool
    {
        $this->connectServer();
        if ($time > 2592000) {
            $time = time() + $time;
        }

        if (isset($option['skipExisting']) && $option['skipExisting'] === true) {
            return $this->instant->add($keyword, $value, false, $time);

        }

        return $this->instant->set($keyword, $value, false, $time);
    }

    public function connectServer(): void
    {
        $server = $this->config['memcache'];
        if (count($server) < 1) {
            $server = array(
                array("127.0.0.1", 11211),
            );
        }

        foreach ($server as $s) {
            $name = $s[0] . "_" . $s[1];
            if (!isset($this->checked[$name])) {
                try {
                    if (!$this->instant->addserver($s[0], $s[1])) {
                        $this->fallback = true;
                    }

                    $this->checked[$name] = 1;
                } catch (Exception $e) {
                    $this->fallback = true;
                }
            }

        }
    }

    public function driver_get($keyword, $option = array()): array|string|null
    {

        $this->connectServer();
        $x = $this->instant->get($keyword);

        if ($x === false) {
            return null;
        }

        return $x;

    }

    public function driver_delete($keyword, $option = array())
    {
        $this->connectServer();
        $this->instant->delete($keyword);
    }

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "array|bool"])] public function driver_stats($option = array()): array
    {
        $this->connectServer();
        return array(
            "info" => "",
            "size" => "",
            "data" => $this->instant->getStats(),
        );

    }

    public function driver_clean($option = array())
    {
        $this->connectServer();
        $this->instant->flush();
    }

    public function driver_isExisting($keyword): bool
    {
        $this->connectServer();
        $x = $this->get($keyword);

        return !($x === null);
    }
}
