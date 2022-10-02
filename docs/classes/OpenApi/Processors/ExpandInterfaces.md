***

# ExpandInterfaces

Look at all (direct) interfaces for a schema and:

- merge interfaces annotations/methods into the schema if the interface does not have a schema itself
- inherit from the interface if it has a schema (allOf).


* Full name: `\OpenApi\Processors\ExpandInterfaces`

## Methods

### __invoke

```php
public __invoke(\OpenApi\Analysis $analysis): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |

***

## Inherited methods

### inheritFrom

```php
protected inheritFrom(\OpenApi\Annotations\Schema $schema, \OpenApi\Annotations\Schema $from, string $refPath, ?\OpenApi\Context $context): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\OpenApi\Annotations\Schema** |  |
| `$from` | **\OpenApi\Annotations\Schema** |  |
| `$refPath` | **string** |  |
| `$context` | **?\OpenApi\Context** |  |

***

### mergeAnnotations

```php
protected mergeAnnotations(\OpenApi\Annotations\Schema $schema, array $from, array& $existing): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\OpenApi\Annotations\Schema** |  |
| `$from` | **array** |  |
| `$existing` | **array** |  |

***

### mergeProperties

```php
protected mergeProperties(\OpenApi\Annotations\Schema $schema, array $from, array& $existing): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\OpenApi\Annotations\Schema** |  |
| `$from` | **array** |  |
| `$existing` | **array** |  |

***

### mergeMethods

```php
protected mergeMethods(\OpenApi\Annotations\Schema $schema, array $from, array& $existing): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\OpenApi\Annotations\Schema** |  |
| `$from` | **array** |  |
| `$existing` | **array** |  |

***


***

