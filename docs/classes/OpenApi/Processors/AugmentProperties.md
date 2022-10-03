***

# AugmentProperties

Use the property context to extract useful information and inject that into the annotation.



* Full name: `\OpenApi\Processors\AugmentProperties`



## Properties


### types



```php
public static $types
```



* This property is **static**.


***

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

### isNullable



```php
protected isNullable(string $typeDescription): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeDescription` | **string** |  |




***

### stripNull



```php
protected stripNull(string $typeDescription): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeDescription` | **string** |  |




***

### applyType



```php
protected applyType(\OpenApi\Annotations\Property $property, mixed $type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\OpenApi\Annotations\Property** |  |
| `$type` | **mixed** |  |




***

### applyRef



```php
protected applyRef(\OpenApi\Annotations\Property $property, string $ref): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\OpenApi\Annotations\Property** |  |
| `$ref` | **string** |  |




***


***

