<?php /* yxorP */

use Predis\Client;

class cache_predis extends BaseCache implements cache_driver
{
    public bool $checked_redis = false;

    public function __construct($config = array())
    {
        $this->setup($config);
        if (!class_exists(Client::class)) {
            $this->required_extension("predis-1.0/autoload.php");
        }
    }

    public function checkdriver(): bool
    {

        if (!class_exists(Client::class)) {
            $this->required_extension("predis-1.0/autoload.php");
            try {
                Predis\Autoloader::register();
            } catch (Exception $e) {

            }
        }
        return true;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array())
    {
        if ($this->connectServer()) {
            $value = $this->encode($value);
            return $this->instant->setex($keyword, $time, $value);
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
            );
        if ($this->checked_redis === false) {
            $c = array(
                "host" => $server['host'],
            );

            $port = $server['port'] ?? "";
            if ($port !== "") {
                $c['port'] = $port;
            }

            $password = $server['password'] ?? "";
            if ($password !== "") {
                $c['password'] = $password;
            }

            $database = $server['database'] ?? "";
            if ($database !== "") {
                $c['database'] = $database;
            }

            $timeout = $server['timeout'] ?? "";
            if ($timeout !== "") {
                $c['timeout'] = $timeout;
            }

            $read_write_timeout = $server['read_write_timeout'] ?? "";
            if ($read_write_timeout !== "") {
                $c['read_write_timeout'] = $read_write_timeout;
            }

            $this->instant = new Predis\Client($c);

            $this->checked_redis = true;


            return true;
        }

        return true;
    }

    public function driver_get($keyword, $option = array()): mixed
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
            return !($x === null);
        }

        return $this->backup()->isExisting($keyword);
    }
}
