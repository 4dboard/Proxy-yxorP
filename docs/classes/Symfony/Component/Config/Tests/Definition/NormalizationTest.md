***

# NormalizationTest





* Full name: `\Symfony\Component\Config\Tests\Definition\NormalizationTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)




## Methods


### testNormalizeEncoders



```php
public testNormalizeEncoders(mixed $denormalized): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$denormalized` | **mixed** |  |




***

### getEncoderTests



```php
public getEncoderTests(): mixed
```











***

### testAnonymousKeysArray



```php
public testAnonymousKeysArray(mixed $denormalized): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$denormalized` | **mixed** |  |




***

### getAnonymousKeysTests



```php
public getAnonymousKeysTests(): mixed
```











***

### testNumericKeysAsAttributes



```php
public testNumericKeysAsAttributes(mixed $denormalized): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$denormalized` | **mixed** |  |




***

### getNumericKeysTests



```php
public getNumericKeysTests(): mixed
```











***

### testNonAssociativeArrayThrowsExceptionIfAttributeNotSet



```php
public testNonAssociativeArrayThrowsExceptionIfAttributeNotSet(): mixed
```











***

### testAssociativeArrayPreserveKeys



```php
public testAssociativeArrayPreserveKeys(): mixed
```











***

### assertNormalized



```php
public static assertNormalized(\Symfony\Component\Config\Definition\NodeInterface $tree, mixed $denormalized, mixed $normalized): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tree` | **\Symfony\Component\Config\Definition\NodeInterface** |  |
| `$denormalized` | **mixed** |  |
| `$normalized` | **mixed** |  |




***

### getNumericKeysTestTree



```php
private getNumericKeysTestTree(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
