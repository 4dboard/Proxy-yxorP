<?php declare(strict_types=1);

namespace yxorP\app\lib\data\enum;

use IteratorAggregate;
use Serializable;
use Traversable;
use yxorP\app\lib\data\enum\exception\expectationException;
use yxorP\app\lib\data\enum\exception\illegalArgumentException;

final class enumMap implements Serializable, IteratorAggregate
{
    private $keyType;
    private $valueType;
    private $allowNullValues;
    private $keyUniverse;
    private $values;
    private $size = 0;

    public function expect(string $keyType, string $valueType, bool $allowNullValues): void
    {
        if ($keyType !== $this->keyType) {
            throw new expectationException(sprintf('Callee expected an EnumMap with key type %s, but got %s', $keyType, $this->keyType));
        }
        if ($valueType !== $this->valueType) {
            throw new expectationException(sprintf('Callee expected an EnumMap with value type %s, but got %s', $keyType, $this->keyType));
        }
        if ($allowNullValues !== $this->allowNullValues) {
            throw new expectationException(sprintf('Callee expected an EnumMap with nullable flag %s, but got %s', ($allowNullValues ? 'true' : 'false'), ($this->allowNullValues ? 'true' : 'false')));
        }
    }

    public function size(): int
    {
        return $this->size;
    }

    public function containsValue($value): bool
    {
        return in_array($this->maskNull($value), $this->values, true);
    }

    private function maskNull($value)
    {
        if (null === $value) {
            return nullValue::instance();
        }
        return $value;
    }

    public function containsKey(abstractEnum $key): bool
    {
        $this->checkKeyType($key);
        return null !== $this->values[$key->ordinal()];
    }

    private function checkKeyType(abstractEnum $key): void
    {
        if (get_class($key) !== $this->keyType) {
            throw new illegalArgumentException(sprintf('Object of type %s is not the same type as %s', get_class($key), $this->keyType));
        }
    }

    public function get(abstractEnum $key)
    {
        $this->checkKeyType($key);
        return $this->unmaskNull($this->values[$key->ordinal()]);
    }

    private function unmaskNull($value)
    {
        if ($value instanceof nullValue) {
            return null;
        }
        return $value;
    }

    public function remove(abstractEnum $key)
    {
        $this->checkKeyType($key);
        $index = $key->ordinal();
        $oldValue = $this->values[$index];
        $this->values[$index] = null;
        if (null !== $oldValue) {
            --$this->size;
        }
        return $this->unmaskNull($oldValue);
    }

    public function clear(): void
    {
        $this->values = array_fill(0, count($this->keyUniverse), null);
        $this->size = 0;
    }

    public function equals(self $other): bool
    {
        if ($this === $other) {
            return true;
        }
        if ($this->size !== $other->size) {
            return false;
        }
        return $this->values === $other->values;
    }

    public function values(): array
    {
        return array_values(array_map(function ($value) {
            return $this->unmaskNull($value);
        }, array_filter($this->values, function ($value): bool {
            return null !== $value;
        })));
    }

    public function serialize(): string
    {
        $values = [];
        foreach ($this->values as $ordinal => $value) {
            if (null === $value) {
                continue;
            }
            $values[$ordinal] = $this->unmaskNull($value);
        }
        return serialize(['keyType' => $this->keyType, 'valueType' => $this->valueType, 'allowNullValues' => $this->allowNullValues, 'values' => $values,]);
    }

    public function unserialize($serialized): void
    {
        $data = unserialize($serialized);
        $this->__construct($data['keyType'], $data['valueType'], $data['allowNullValues']);
        foreach ($this->keyUniverse as $key) {
            if (array_key_exists($key->ordinal(), $data['values'])) {
                $this->put($key, $data['values'][$key->ordinal()]);
            }
        }
    }

    public function __construct(string $keyType, string $valueType, bool $allowNullValues)
    {
        if (!is_subclass_of($keyType, abstractEnum::class)) {
            throw new illegalArgumentException(sprintf('Class %s does not extend %s', $keyType, abstractEnum::class));
        }
        $this->keyType = $keyType;
        $this->valueType = $valueType;
        $this->allowNullValues = $allowNullValues;
        $this->keyUniverse = $keyType::values();
        $this->values = array_fill(0, count($this->keyUniverse), null);
    }

    public function put(abstractEnum $key, $value)
    {
        $this->checkKeyType($key);
        if (!$this->isValidValue($value)) {
            throw new illegalArgumentException(sprintf('Value is not of type %s', $this->valueType));
        }
        $index = $key->ordinal();
        $oldValue = $this->values[$index];
        $this->values[$index] = $this->maskNull($value);
        if (null === $oldValue) {
            ++$this->size;
        }
        return $this->unmaskNull($oldValue);
    }

    private function isValidValue($value): bool
    {
        if (null === $value) {
            if ($this->allowNullValues) {
                return true;
            }
            return false;
        }
        switch ($this->valueType) {
            case 'mixed':
                return true;
            case 'bool':
            case 'boolean':
                return is_bool($value);
            case 'int':
            case 'integer':
                return is_int($value);
            case 'float':
            case 'double':
                return is_float($value);
            case 'string':
                return is_string($value);
            case 'object':
                return is_object($value);
            case 'array':
                return is_array($value);
        }
        return $value instanceof $this->valueType;
    }

    public function getIterator(): Traversable
    {
        foreach ($this->keyUniverse as $key) {
            if (null === $this->values[$key->ordinal()]) {
                continue;
            }
            yield $key => $this->unmaskNull($this->values[$key->ordinal()]);
        }
    }
}
