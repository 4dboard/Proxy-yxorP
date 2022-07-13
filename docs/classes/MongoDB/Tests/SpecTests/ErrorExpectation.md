***

# ErrorExpectation

Spec test operation error expectation.



* Full name: `\MongoDB\Tests\SpecTests\ErrorExpectation`
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

### code



```php
private int $code
```






***

### codeName



```php
private string $codeName
```






***

### isExpected



```php
private bool $isExpected
```






***

### excludedLabels



```php
private string[] $excludedLabels
```






***

### includedLabels



```php
private string[] $includedLabels
```






***

### messageContains



```php
private string $messageContains
```






***

## Methods


### __construct



```php
private __construct(): mixed
```











***

### fromChangeStreams



```php
public static fromChangeStreams(\stdClass $result): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\stdClass** |  |




***

### fromClientSideEncryption



```php
public static fromClientSideEncryption(\stdClass $operation): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |




***

### fromCrud



```php
public static fromCrud(\stdClass $result): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\stdClass** |  |




***

### fromReadWriteConcern



```php
public static fromReadWriteConcern(\stdClass $operation): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |




***

### fromRetryableReads



```php
public static fromRetryableReads(\stdClass $operation): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |




***

### fromRetryableWrites



```php
public static fromRetryableWrites(\stdClass $outcome): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$outcome` | **\stdClass** |  |




***

### fromTransactions



```php
public static fromTransactions(\stdClass $operation): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |




***

### noError



```php
public static noError(): mixed
```



* This method is **static**.







***

### assert

Assert that the error expectation matches the actual outcome.

```php
public assert(\MongoDB\Tests\TestCase $test, \Exception|null $actual = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\TestCase** | Test instance for performing assertions |
| `$actual` | **\Exception&#124;null** | Exception (if any) from the actual outcome |




***

### isExpected



```php
public isExpected(): mixed
```











***

### assertCodeName

Assert that the error code name expectation matches the actual outcome.

```php
private assertCodeName(\MongoDB\Tests\TestCase $test, \Exception|null $actual = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\TestCase** | Test instance for performing assertions |
| `$actual` | **\Exception&#124;null** | Exception (if any) from the actual outcome |




***

### fromGenericOperation



```php
private static fromGenericOperation(\stdClass $operation): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |




***

### isArrayOfStrings



```php
private static isArrayOfStrings(mixed $array): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
