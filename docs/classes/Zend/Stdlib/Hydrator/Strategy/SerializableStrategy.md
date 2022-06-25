***

# SerializableStrategy

* Full name: `\Zend\Stdlib\Hydrator\Strategy\SerializableStrategy`
* Parent class: [`\Zend\Hydrator\Strategy\SerializableStrategy`](../../../Hydrator/Strategy/SerializableStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Inherited methods

### __construct

```php
public __construct(mixed $serializer, mixed $serializerOptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializer` | **mixed** | string or SerializerAdapter |
| `$serializerOptions` | **mixed** |  |

***

### extract

Serialize the given value so that it can be extracted by the hydrator.

```php
public extract(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |

**Return Value:**

Returns the value that should be extracted.



***

### hydrate

Unserialize the given value so that it can be hydrated by the hydrator.

```php
public hydrate(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |

**Return Value:**

Returns the value that should be hydrated.



***

### setSerializer

Set serializer

```php
public setSerializer(string|\Zend\Serializer\Adapter\AdapterInterface $serializer): \Zend\Hydrator\Strategy\SerializableStrategy
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializer` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** |  |

***

### getSerializer

Get serializer

```php
public getSerializer(): \Zend\Serializer\Adapter\AdapterInterface
```

***

### setSerializerOptions

Set configuration options for instantiating a serializer adapter

```php
public setSerializerOptions(mixed $serializerOptions): \Zend\Hydrator\Strategy\SerializableStrategy
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializerOptions` | **mixed** |  |

***

### getSerializerOptions

Get configuration options for instantiating a serializer adapter

```php
public getSerializerOptions(): mixed
```

yxorP::get('REQUEST')
