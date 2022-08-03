<?php namespace yxorP\app\lib\data\mongodb\hybrid;
class client
{
    public ?string $type = null;
    protected mongo|mongoLite $driver;

    public function __construct(string $server, array $options = [], array $driverOptions = [])
    {
        if (str_starts_with($server, 'mongodb://') || str_starts_with($server, 'mongodb+srv://')) {
            $this->driver = new mongo($server, $options, $driverOptions);
            $this->type = 'mongodb';
        }
        if (str_starts_with($server, 'mongolite://')) {
            $this->driver = new mongoLite($server, $options);
            $this->type = 'mongolite';
        }
    }

    public function dropCollection(string $name, ?string $db = null): mixed
    {
        return $this->driver->getCollection($name, $db)->drop();
    }

    public function renameCollection(string $name, string $newname, ?string $db = null): bool
    {
        return $this->driver->renameCollection($name, $newname, $db);
    }

    public function save(string $collection, array &$data): mixed
    {
        return $this->driver->save($collection, $data);
    }

    public function insert(string $collection, array &$doc): mixed
    {
        return $this->driver->insert($collection, $doc);
    }

    public function findTerm(string $collection, string $term, array $options = [])
    {
        $options['filter'] = $this->driver->getFindTermFilter($term);
        return $this->driver->find($collection, $options);
    }

    public function removeKey(string $collection, string $key): mixed
    {
        return $this->driver->remove($collection, ['key' => (is_array($key) ? ['$in' => $key] : $key)]);
    }

    public function keyExists(string $collection, string $key): mixed
    {
        return $this->driver->count($collection, ['key' => $key]);
    }

    public function incrKey(string $collection, string $key, int $by = 1): int
    {
        $current = $this->getKey($collection, $key, 0);
        $newone = $current + $by;
        $this->setKey($collection, $key, $newone);
        return $newone;
    }

    public function getKey(string $collection, string $key, mixed $default = null): mixed
    {
        $entry = $this->driver->findOne($collection, ['key' => $key]);
        return $entry ? $entry['val'] : $default;
    }

    public function setKey(string $collection, string $key, mixed $value): mixed
    {
        $entry = $this->driver->findOne($collection, ['key' => $key]);
        if ($entry) {
            $entry['val'] = $value;
        } else {
            $entry = ['key' => $key, 'val' => $value];
        }
        return $this->driver->save($collection, $entry);
    }

    public function decrKey(string $collection, string $key, int $by = 1): int
    {
        return $this->incr($collection, $key, ($by * -1));
    }

    public function rpush(string $collection, string $key, mixed $value): int
    {
        $list = $this->getKey($collection, $key, []);
        $list[] = $value;
        $this->setKey($collection, $key, $list);
        return count($list);
    }

    public function lpush(string $collection, string $key, mixed $value): int
    {
        $list = $this->getKey($collection, $key, []);
        array_unshift($list, $value);
        $this->setKey($collection, $key, $list);
        return count($list);
    }

    public function lset(string $collection, string $key, int $index, mixed $value): bool
    {
        $list = $this->getKey($collection, $key, []);
        if ($index < 0) {
            $index = count($list) - abs($index);
        }
        if (isset($list[$index])) {
            $list[$index] = $value;
            $this->setKey($collection, $key, $list);
            return true;
        }
        return false;
    }

    public function lindex(string $collection, string $key, int $index): mixed
    {
        $list = $this->getKey($collection, $key, []);
        if ($index < 0) {
            $index = count($list) - abs($index);
        }
        return $list[$index] ?? null;
    }

    public function hgetall(string $collection, string $key): array
    {
        return $this->getKey($collection, $key, []);
    }

    public function hexists(string $collection, string $key, string $field): bool
    {
        $set = $this->getKey($collection, $key, []);
        return isset($set[$field]);
    }

    public function hvals(string $collection, string $key): array
    {
        $set = $this->getKey($collection, $key, []);
        return array_values($set);
    }

    public function hlen(string $collection, string $key): int
    {
        return count($this->hkeys($collection, $key));
    }

    public function hkeys(string $collection, string $key): array
    {
        $set = $this->getKey($collection, $key, []);
        return array_keys($set);
    }

    public function hdel(string $collection, string $key): int
    {
        $set = $this->getKey($collection, $key, []);
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
        $this->setKey($collection, $key, $set);
        return $removed;
    }

    public function hincrby(string $collection, string $key, string $field, int $by = 1): int
    {
        $current = $this->hget($collection, $key, $field, 0);
        $newone = $current + $by;
        $this->hset($collection, $key, $field, $newone);
        return $newone;
    }

    public function hget(string $collection, string $key, string $field, mixed $default = null): mixed
    {
        $set = $this->getKey($collection, $key, []);
        return $set[$field] ?? $default;
    }

    public function hset(string $collection, string $key, string $field, mixed $value): void
    {
        $set = $this->getKey($collection, $key, []);
        $set[$field] = $value;
        $this->setKey($collection, $key, $set);
    }

    public function hmget(string $collection, string $key): array
    {
        $set = $this->getKey($collection, $key, []);
        $fields = func_get_args();
        $values = [];
        for ($i = 1; $i < count($fields); $i++) {
            $field = $fields[$i];
            $values[] = $set[$field] ?? null;
        }
        return $values;
    }

    public function hmset(string $collection, string $key): void
    {
        $set = $this->getKey($collection, $key, []);
        $args = func_get_args();
        for ($i = 1; $i < count($fields); $i++) {
            $field = $args[$i];
            $value = $args[($i + 1)] ?? null;
            $set[$field] = $value;
            $i = $i + 1;
        }
        $this->setKey($collection, $key, $set);
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->driver, $method], $args);
    }
}
