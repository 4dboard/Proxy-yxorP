***

# OperationParams

Structure representing parsed HTTP parameters for GraphQL operation

* Full name: `\GraphQL\Server\OperationParams`

## Properties

### queryId

Id of the query (when using persistent queries).

```php
public string $queryId
```

Valid aliases (case-insensitive):

- id
- queryId
- documentId

***

### query

```php
public string $query
```

***

### operation

```php
public string $operation
```

***

### variables

```php
public array|null $variables
```

***

### extensions

```php
public array|null $extensions
```

***

### originalInput

```php
private array $originalInput
```

***

### readOnly

```php
private bool $readOnly
```

***

## Methods

### create

Creates an instance from given array

```php
public static create(array $params, bool $readonly = false): \GraphQL\Server\OperationParams
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |
| `$readonly` | **bool** |  |

***

### getOriginalInput

```php
public getOriginalInput(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### isReadOnly

Indicates that operation is executed in read-only context
(e.g. via HTTP GET request)

```php
public isReadOnly(): bool
```

***


***

