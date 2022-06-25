***

# TagProcessor

Adds a tags array into record

* Full name: `\Monolog\Processor\TagProcessor`
* This class implements:
  [`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)

## Properties

### tags

```php
private $tags
```

***

## Methods

### __construct

```php
public __construct(array $tags = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **array** |  |

***

### addTags

```php
public addTags(array $tags = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **array** |  |

***

### setTags

```php
public setTags(array $tags = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **array** |  |

***

### __invoke

```php
public __invoke(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

**Return Value:**

The processed records yxorP::get('REQUEST')
