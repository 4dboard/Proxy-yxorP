<?php /* yxorP */


class cache_redis extends BaseCache implements cache_driver
{


    public bool $checked_redis = false;


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

        if (class_exists("Redis")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        if ($this->connectServer()) {
            $value = $this->encode($value);
            if (isset($option['skipExisting']) && $option['skipExisting'] == true) {
                return $this->instant->set($keyword, $value,
                    array('xx', 'ex' => $time));
            }

            return $this->instant->set($keyword, $value, $time);
        }

        return $this->backup()->set($keyword, $value, $time, $option);
    }

    public function connectServer(): bool
    {

        $server = $this->config['redis'] ?? array(
                "host" => "127.0.0.1",
                "port" => "6379",
                "password" => "",
                "database" => "",
                "timeout" => "1",
            );

        if ($this->checked_redis === false) {

            $host = $server['host'];

            $port = isset($server['port']) ? (int)$server['port'] : "";
            if ($port != "") {
                $c['port'] = $port;
            }

            $password = $server['password'] ?? "";
            if ($password != "") {
                $c['password'] = $password;
            }

            $database = $server['database'] ?? "";
            if ($database != "") {
                $c['database'] = $database;
            }

            $timeout = $server['timeout'] ?? "";
            if ($timeout != "") {
                $c['timeout'] = $timeout;
            }

            $read_write_timeout = $server['read_write_timeout'] ?? "";
            if ($read_write_timeout != "") {
                $c['read_write_timeout'] = $read_write_timeout;
            }


            if (!$this->instant->connect($host, (int)$port, (int)$timeout)) {
                $this->checked_redis = true;
                $this->fallback = true;
                return false;
            }

            if ($database != "") {
                $this->instant->select((int)$database);
            }
            $this->checked_redis = true;
            return true;
        }

        return true;
    }

    public function driver_get($keyword, $option = array())
    {
        if ($this->connectServer()) {


            $x = $this->instant->get($keyword);
            if ($x == false) {
                return null;
            }

            return $this->decode($x);
        }

        $this->backup()->get($keyword, $option);

    }


    public function driver_delete($keyword, $option = array())
    {

        if ($this->connectServer()) {
            $this->instant->delete($keyword);
        }

    }


    public function driver_stats($option = array()): array
    {
        if ($this->connectServer()) {
            return array(
                "info" => "",
                "size" => "",
                "data" => $this->instant->info(),
            );
        }

        return array();

    }


    public function driver_clean($option = array())
    {
        if ($this->connectServer()) {
            $this->instant->flushDB();
        }

    }


    public function driver_isExisting($keyword): ?bool
    {
        if ($this->connectServer()) {
            $x = $this->instant->exists($keyword);
            return $x != null;
        }

        return $this->backup()->isExisting($keyword);

    }
}
