<?php /* yxorP */

class cache_ssdb extends BaseCache implements cache_driver
{
    private bool $checked_ssdb = false;

    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }
    }

    public function checkdriver(): bool
    {

        $this->required_extension("SSDB.php");
        if (class_exists("SimpleSSDB")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        if ($this->connectServer()) {
            if (isset($option['skipExisting']) && $option['skipExisting'] === true) {
                $x = $this->instant->get($keyword);
                if ($x === false) {
                    return false;
                }

                if (!is_null($x)) {
                    return true;
                }
            }
            $value = $this->encode($value);
            return $this->instant->setx($keyword, $value, $time);
        }

        return $this->backup()->set($keyword, $value, $time, $option);
    }

    public function connectServer(): bool
    {

        $server = $this->config['ssdb'] ?? array(
                "host" => "127.0.0.1",
                "port" => 8888,
                "password" => "",
                "timeout" => 2000,
            );

        if ($this->checked_ssdb === false) {
            $host = $server['host'];
            $port = isset($server['port']) ? (int)$server['port'] : 8888;
            $password = $server['password'] ?? "";
            $timeout = isset($server['timeout']) ? (int)$server['timeout'] : 2000;
            try {
                $this->instant = new SimpleSSDB($host, $port, $timeout);
            } catch (SSDBException $e) {
            }
            if (!empty($password)) {
                $this->instant->auth($password);
            }
            $this->checked_ssdb = true;
            if (false) {
                $this->fallback = true;
                return false;
            }

            return true;
        }

        return true;
    }

    public function driver_get($keyword, $option = array())
    {
        if ($this->connectServer()) {
            $x = $this->instant->get($keyword);
            if ($x === false) {
                return null;
            }

            return $this->decode($x);
        }

        $this->backup()->get($keyword, $option);
    }

    public function driver_delete($keyword, $option = array())
    {
        if ($this->connectServer()) {
            $this->instant->del($keyword);
        }
    }

    public function driver_stats($option = array()): array
    {
        if ($this->connectServer()) {
            return array(
                "info" => "",
                "size" => $this->instant->dbsize(),
                "data" => $this->instant->info(),
            );
        }

        return array();
    }

    public function driver_clean($option = array()): bool
    {

        return false;
    }

    public function driver_isExisting($keyword): ?bool
    {
        if ($this->connectServer()) {
            $x = $this->instant->exists($keyword);
            return !($x === null);
        }

        return $this->backup()->isExisting($keyword);
    }
}
