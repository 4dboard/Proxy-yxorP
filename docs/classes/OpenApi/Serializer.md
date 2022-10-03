***

# Serializer

Allows to serialize/de-serialize annotations from/to JSON.



* Full name: `\OpenApi\Serializer`

**See Also:**

* https://github.com/zircote/swagger-php - 



## Properties


### VALID_ANNOTATIONS



```php
private static $VALID_ANNOTATIONS
```



* This property is **static**.


***

## Methods


### isValidAnnotationClass



```php
public static isValidAnnotationClass(mixed $className): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **mixed** |  |




***

### serialize

Serialize.

```php
public serialize(\OpenApi\Annotations\AbstractAnnotation $annotation): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **\OpenApi\Annotations\AbstractAnnotation** |  |




***

### deserialize

Deserialize a string.

```php
public deserialize(string $jsonString, string $className): \OpenApi\Annotations\AbstractAnnotation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jsonString` | **string** |  |
| `$className` | **string** |  |




***

### deserializeFile

Deserialize a file.

```php
public deserializeFile(string $filename, string $className = OAOpenApi::class): \OpenApi\Annotations\AbstractAnnotation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$className` | **string** |  |




***

### doDeserialize

Do deserialization.

```php
protected doDeserialize(\stdClass $c, string $class): \OpenApi\Annotations\AbstractAnnotation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$c` | **\stdClass** |  |
| `$class` | **string** |  |




***

### doDeserializeProperty

Deserialize the annotation's property.

```php
protected doDeserializeProperty(\OpenApi\Annotations\AbstractAnnotation $annotation, string $property, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **\OpenApi\Annotations\AbstractAnnotation** |  |
| `$property` | **string** |  |
| `$value` | **mixed** |  |




***

### doDeserializeBaseProperty

Deserialize base annotation property.

```php
protected doDeserializeBaseProperty(array|string $type, mixed $value): array|\OpenApi\Annotations\AbstractAnnotation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **array&#124;string** | The property type |
| `$value` | **mixed** | The value to deserialization |




***


***

