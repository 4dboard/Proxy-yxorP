***

# OperationId

Generate the OperationId based on the context of the OpenApi annotation.

* Full name: `\OpenApi\Processors\OperationId`

## Properties

### hash

```php
protected $hash
```

***

## Methods

### __construct

```php
public __construct(bool $hash = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **bool** | if `true` hash generated ids instead of clear text |

***

### isHash

```php
public isHash(): bool
```

***

### setHash

```php
public setHash(bool $hash): \OpenApi\Processors\OperationId
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **bool** |  |

***

### __invoke

```php
public __invoke(\OpenApi\Analysis $analysis): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |

***


***

