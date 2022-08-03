<?php class redisLite
{
    protected string $path;
    protected object $connection;
    protected string $table;

    public function __construct(string $path = ':memory:', array $options = [])
    {
        $options = array_merge(['storagetable' => 'storage', PDO::ATTR_TIMEOUT => 0, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,], $options);
        $dns = "sqlite:{$path}";
        $this->path = $path;
        $this->table = $options['storagetable'];
        $this->connection = new PDO($dns, null, null, $options);
        $this->connection->exec('PRAGMA journal_mode = MEMORY');
        $this->connection->exec('PRAGMA synchronous = OFF');
        $this->connection->exec('PRAGMA PAGE_SIZE = 4096');
        $stmt = $this->connection->query("SELECT name FROM sqlite_master WHERE type='table' AND name='{$this->table}';");
        $table = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        if (!isset($table['name'])) {
            $this->createTable();
        }
    }

    protected function createTable()
    {
        $this->connection->exec("CREATE TABLE {$this->table} (key VARCHAR, keyval TEXT)");
        $this->connection->exec("CREATE INDEX key_name on {$this->table} (key);");
    }

    public function flushdb(): void
    {
        $this->connection->exec("DELETE FROM {$this->table}");
    }

    public function keys(?string $pattern = null): array
    {
        $keys = [];
        $stmt = $this->connection->query("SELECT `key` FROM {$this->table} ORDER BY `key`;");
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
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

    public function del(string $key): int
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

    public function type(string $key): string
    {
        $value = $this->get($key, null);
        return gettype($value);
    }

    public function get(string $key, mixed $default = false): mixed
    {
        $stmt = $this->connection->query("SELECT * FROM {$this->table} WHERE `key`='{$key}' LIMIT 1;");
        if (!$stmt) {
            return $default;
        }
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return isset($res['key']) ? json_decode($res['keyval'], true) : $default;
    }

    public function decr(string $key, int $by = 1): int
    {
        return $this->incr($key, ($by * -1));
    }

    public function incr(string $key, int $by = 1): int
    {
        $current = $this->get($key, 0);
        $newone = $current + $by;
        $this->set($key, $newone);
        return $newone;
    }

    public function set(string $key, mixed $value): void
    {
        $value = $this->connection->quote(json_encode($value, JSON_NUMERIC_CHECK));
        try {
            if ($this->exists($key)) {
                $sql = "UPDATE {$this->table} SET `keyval`={$value} WHERE `key`='{$key}'";
            } else {
                $sql = "INSERT INTO {$this->table} (`key`,`keyval`) VALUES ('{$key}',{$value})";
            }
            $this->connection->exec($sql);
        } catch (PDOException $e) {
        }
    }

    public function exists(string $key): bool
    {
        $stmt = $this->connection->query("SELECT `key` FROM {$this->table} WHERE `key`='{$key}' LIMIT 1;");
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return isset($res["key"]);
    }

    public function llen(string $key): int
    {
        $value = $this->get($key, []);
        return is_array($value) ? count($value) : 0;
    }

    public function rpush(string $key, mixed $value): int
    {
        $list = $this->get($key, []);
        $list[] = $value;
        $this->set($key, $list);
        return count($list);
    }

    public function lpush(string $key, mixed $value): int
    {
        $list = $this->get($key, []);
        array_unshift($list, $value);
        $this->set($key, $list);
        return count($list);
    }

    public function lset(string $key, int $index, mixed $value): bool
    {
        $list = $this->get($key, []);
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

    public function lindex(string $key, int $index): mixed
    {
        $list = $this->get($key, []);
        if ($index < 0) {
            $index = count($list) - abs($index);
        }
        return $list[$index] ?? null;
    }

    public function hgetall(string $key): array
    {
        return $this->get($key, []);
    }

    public function hexists(string $key, string $field): bool
    {
        $set = $this->get($key, []);
        return isset($set[$field]);
    }

    public function hvals(string $key): array
    {
        $set = $this->get($key, []);
        return array_values($set);
    }

    public function hlen(string $key): int
    {
        return count($this->hkeys($key));
    }

    public function hkeys(string $key): array
    {
        $set = $this->get($key, []);
        return array_keys($set);
    }

    public function hdel(string $key): int
    {
        $set = $this->get($key, []);
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

    public function hincrby(string $key, string $field, int $by = 1): int
    {
        $current = $this->hget($key, $field, 0);
        $newone = $current + $by;
        $this->hset($key, $field, $newone);
        return $newone;
    }

    public function hget(string $key, string $field, mixed $default = null): mixed
    {
        $set = $this->get($key, []);
        return $set[$field] ?? $default;
    }

    public function hset(string $key, string $field, mixed $value): void
    {
        $set = $this->get($key, []);
        $set[$field] = $value;
        $this->set($key, $set);
    }

    public function hmget(string $key): array
    {
        $set = $this->get($key, []);
        $fields = func_get_args();
        $values = [];
        for ($i = 1; $i < count($fields); $i++) {
            $field = $fields[$i];
            $values[] = $set[$field] ?? null;
        }
        return $values;
    }

    public function hmset(string $key)
    {
        $set = $this->get($key, []);
        $args = func_get_args();
        for ($i = 1; $i < count($args); $i++) {
            $field = $args[$i];
            $value = $args[($i + 1)] ?? null;
            $set[$field] = $value;
            $i = $i + 1;
        }
        $this->set($key, $set);
    }
}
