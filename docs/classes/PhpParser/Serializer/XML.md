***

# XML

* Full name: `\PhpParser\Serializer\XML`
* This class implements:
  [`\PhpParser\Serializer`](../Serializer.md)

## Properties

### writer

```php
protected $writer
```

***

## Methods

### __construct

Constructs a XML serializer.

```php
public __construct(): mixed
```

***

### serialize

Serializes statements into some string format.

```php
public serialize(array $nodes): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Statements |

**Return Value:**

Serialized string



***

### _serialize

```php
protected _serialize(mixed $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |

yxorP::get('REQUEST')
