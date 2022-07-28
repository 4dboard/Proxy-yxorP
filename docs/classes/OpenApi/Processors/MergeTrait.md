***

# MergeTrait

Steps:
1. Determine direct parent / interfaces / traits
2. With each:
   - traverse up inheritance tree
     - inherit from first with schema; all other with scheme can be ignored
     - merge from all without schema
       => update all $ref that might reference a property merged.



* Full name: `\OpenApi\Processors\MergeTrait`




## Methods


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


