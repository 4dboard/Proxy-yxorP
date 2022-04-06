<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

/**
 * @property $checked
 */
class cache_memcached extends BaseCache implements cache_driver
{
    public $instant;

    public function __construct($config = array())
    {

        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }
        if (class_exists("Memcached")) {
            $this->instant = new Memcached();
        } else {
            $this->fallback = true;
        }

    }

    public function checkdriver(): bool
    {
        if (class_exists("Memcached")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        $this->connectServer();
        if ($time > 2592000) {
            $time = time() + $time;
        }

        if (isset($option['isExisting']) && $option['isExisting'] === true) {
            return $this->instant->add($keyword, $value, $time);
        }

        return $this->instant->set($keyword, $value, $time);
    }

    public function connectServer(): bool
    {

        if ($this->checkdriver() === false) {
            return false;
        }

        $s = $this->config['memcache'];
        if (count($s) < 1) {
            $s = array(
                array("127.0.0.1", 11211, 100),
            );
        }

        foreach ($s as $server) {
            $name = $server[0] ?? "127.0.0.1";
            $port = $server[1] ?? 11211;
            $sharing = $server[2] ?? 0;
            $checked = $name . "_" . $port;
            if (!isset($this->checked[$checked])) {
                try {
                    if ($sharing > 0) {
                        if (!$this->instant->addServer($name, $port,
                            $sharing)
                        ) {
                            $this->fallback = true;
                        }
                    } else if (!$this->instant->addServer($name, $port)) {
                        $this->fallback = true;
                    }
                    $this->checked[$checked] = 1;
                } catch (Exception $e) {
                    $this->fallback = true;
                }

            }
        }
    }

    public function driver_get($keyword, $option = array())
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

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "array"])] public function driver_stats($option = array()): array
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
