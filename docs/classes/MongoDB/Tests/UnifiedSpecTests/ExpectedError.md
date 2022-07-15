***

# ExpectedError





* Full name: `\MongoDB\Tests\UnifiedSpecTests\ExpectedError`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### codeNameMap



```php
private static array $codeNameMap
```



* This property is **static**.

**See Also:**

* https://github.com/mongodb/mongo/blob/master/src/mongo/base/error_codes.err - 

***

### isError



```php
private bool $isError
```






***

### isClientError



```php
private bool|null $isClientError
```






***

### messageContains



```php
private string|null $messageContains
```






***

### code



```php
private int|null $code
```






***

### codeName



```php
private string|null $codeName
```






***

### includedLabels



```php
private array $includedLabels
```






***

### excludedLabels



```php
private array $excludedLabels
```






***

### expectedResult



```php
private \MongoDB\Tests\UnifiedSpecTests\ExpectedResult|null $expectedResult
```






***

## Methods


### __construct



```php
public __construct(?\stdClass $o, \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$o` | **?\stdClass** |  |
| `$entityMap` | **\MongoDB\Tests\UnifiedSpecTests\EntityMap** |  |




***

### assert

Assert the outcome of an operation.

```php
public assert(\Throwable|null $e = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable&#124;null** | Exception (if any) from executing an operation |




***

### assertIsClientError



```php
private assertIsClientError(\Throwable $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable** |  |




***

### assertCodeName



```php
private assertCodeName(\MongoDB\Driver\Exception\ServerException $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\MongoDB\Driver\Exception\ServerException** |  |




***


***

