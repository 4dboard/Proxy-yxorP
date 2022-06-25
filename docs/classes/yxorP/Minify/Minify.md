***

# Minify

* Full name: `\yxorP\Minify\Minify`
* This class implements:
  [`\yxorP\Minify\MinfyInterface`](./MinfyInterface.md)

## Properties

### processors

```php
private $processors
```

***

## Methods

### __construct

```php
public __construct(\yxorP\Minify\MinfyInterface $processors): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **\yxorP\Minify\MinfyInterface** |  |

***

### createDefault

```php
public static createDefault(): self
```

* This method is **static**.

***

### process

```php
public process(string $buffer): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$buffer` | **string** |  |

***

### addProcessor

```php
public addProcessor(\yxorP\Minify\MinfyInterface $processor): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\yxorP\Minify\MinfyInterface** |  |

yxorP::get('REQUEST')
