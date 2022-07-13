<?php class RedisLite
{
    protected $path;
    protected $connection;
    protected $table;

    public function __construct($path = ":memory:", $options = array())
    {
        $options = array_merge(array("storagetable" => "storage"), $options);
        $dns = "sqlite:{$path}";
        $this->path = $path;
        $this->table = $options["storagetable"];
        $this->connection = new \PDO($dns, null, null, $options);
        $stmt = $this->connection->query("SELECT name FROM sqlite_master WHERE type='table' AND name='" . $this->table . "';");
        $table = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!isset($table["name"])) {
            $this->createTable();
        }
    }

    protected function createTable()
    {
        $this->connection->exec("CREATE TABLE " . $this->table . " (key VARCHAR PRIMARY KEY, keyval TEXT)");
        $this->connection->exec("CREATE UNIQUE INDEX key_name on " . $this->table . " (key);");
    }

    public function flushdb()
    {
        $this->connection->exec("DELETE FROM " . $this->table);
    }

    public function keys($pattern = null)
    {
        $keys = array();
        $stmt = $this->connection->query("SELECT `key` FROM " . $this->table . " ORDER BY `key`;");
        $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if (!$pattern) {
            foreach ($res as $record) {
                $keys[] = $record["key"];
            }
        } else {
            $matcher = function_exists('fnmatch') ? 'fnmatch' : function ($pattern, $string) {
                return preg_match("#^" . strtr(preg_quote($pattern, '#'), array('\*' => '.*', '\?' => '.')) . "$#i", $string);
            };
            foreach ($res as $record) {
                if ($matcher($pattern, $record["key"])) {
                    $keys[] = $record["key"];
                }
            }
        }
        return $keys;
    }

    public function del($key)
    {
        $keys = func_get_args();
        $removed = 0;
        foreach ($keys as $key) {
            $sql = 'DELETE FROM ' . $this->table . ' WHERE `key`="' . $key . '"';
            $this->connection->exec($sql);
            $removed++;
        }
        return $removed;
    }

    public function type($key)
    {
        $value = $this->get($key, null);
        return gettype($value);
    }

    public function get($key, $default = null)
    {
        $stmt = $this->connection->query("SELECT * FROM " . $this->table . " WHERE `key`='{$key}';");
        if (!$stmt) {
            return $default;
        }
        $res = $stmt->fetch(\PDO::FETCH_ASSOC);
        return isset($res["key"]) ? json_decode($res["keyval"], true) : $default;
    }

    public function decr($key, $by = 1)
    {
        return $this->incr($key, ($by * -1));
    }

    public function incr($key, $by = 1)
    {
        $current = $this->get($key, 0);
        $newone = $current + $by;
        $this->set($key, $newone);
        return $newone;
    }

    public function set($key, $value)
    {
        $value = $this->connection->quote(json_encode($value, JSON_NUMERIC_CHECK));
        if ($this->exists($key)) {
            $sql = "UPDATE " . $this->table . " SET `keyval`={$value} WHERE `key`='{$key}'";
        } else {
            $sql = "INSERT INTO " . $this->table . " (`key`,`keyval`) VALUES ('{$key}',{$value})";
        }
        $this->connection->exec($sql);
    }

    public function exists($key)
    {
        $stmt = $this->connection->query("SELECT `key` FROM " . $this->table . " WHERE `key`='{$key}';");
        $res = $stmt->fetch(\PDO::FETCH_ASSOC);
        return isset($res["key"]);
    }

    public function llen($key)
    {
        $value = $this->get($key, array());
        return is_array($value) ? count($value) : 0;
    }

    public function rpush($key, $value)
    {
        $list = $this->get($key, array());
        $list[] = $value;
        $this->set($key, $list);
        return count($list);
    }

    public function lpush($key, $value)
    {
        $list = $this->get($key, array());
        array_unshift($list, $value);
        $this->set($key, $list);
        return count($list);
    }

    public function lset($key, $index, $value)
    {
        $list = $this->get($key, array());
        if ($index < 0) {
            $index = count($list) - abs($index);
        }
        if (isset($list[$index])) {
            $list[$index] = $value;
            $this->set($key, $list);
            return true;
        }
        return false;
    }

    public function lindex($key, $index)
    {
        $list = $this->get($key, array());
        if ($index < 0) {
            $index = count($list) - abs($index);
        }
        return isset($list[$index]) ? $list[$index] : null;
    }

    public function hgetall($key)
    {
        $set = $this->get($key, array());
        return $set;
    }

    public function hexists($key, $field)
    {
        $set = $this->get($key, array());
        return isset($set[$field]);
    }

    public function hvals($key)
    {
        $set = $this->get($key, array());
        return array_values($set);
    }

    public function hlen($key)
    {
        return count($this->hkeys($key));
    }

    public function hkeys($key)
    {
        $set = $this->get($key, array());
        return array_keys($set);
    }

    public function hdel($key)
    {
        $set = $this->get($key, array());
        if (!count($set)) return 0;
        $fields = func_get_args();
        $removed = 0;
        for ($i = 1; $i < count($fields); $i++) {
            $field = $fields[$i];
            if (isset($set[$field])) {
                unset($set[$field]);
                $removed++;
            }
        }
        $this->set($key, $set);
        return $removed;
    }

    public function hincrby($key, $field, $by = 1)
    {
        $current = $this->hget($key, $field, 0);
        $newone = $current + $by;
        $this->hset($key, $field, $newone);
        return $newone;
    }

    public function hget($key, $field, $default = null)
    {
        $set = $this->get($key, array());
        return isset($set[$field]) ? $set[$field] : $default;
    }

    public function hset($key, $field, $value)
    {
        $set = $this->get($key, array());
        $set[$field] = $value;
        $this->set($key, $set);
    }

    public function hmget($key)
    {
        $set = $this->get($key, array());
        $fields = func_get_args();
        $values = array();
        for ($i = 1; $i < count($fields); $i++) {
            $field = $fields[$i];
            $values[] = isset($set[$field]) ? $set[$field] : null;
        }
        return $values;
    }

    public function hmset($key)
    {
        $set = $this->get($key, array());
        $args = func_get_args();
        for ($i = 1; $i < count($fields); $i++) {
            $field = $args[$i];
            $value = isset($args[($i + 1)]) ? $args[($i + 1)] : null;
            $set[$field] = $value;
            $i = $i + 1;
        }
        $this->set($key, $set);
    }
}