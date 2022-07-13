***

# ResultExpectation

Spec test operation result expectation.



* Full name: `\MongoDB\Tests\SpecTests\ResultExpectation`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ASSERT_NOTHING`|public| |0|
|`ASSERT_BULKWRITE`|public| |1|
|`ASSERT_DELETE`|public| |2|
|`ASSERT_INSERTMANY`|public| |3|
|`ASSERT_INSERTONE`|public| |4|
|`ASSERT_UPDATE`|public| |5|
|`ASSERT_SAME`|public| |6|
|`ASSERT_SAME_DOCUMENT`|public| |7|
|`ASSERT_SAME_DOCUMENTS`|public| |8|
|`ASSERT_MATCHES_DOCUMENT`|public| |9|
|`ASSERT_NULL`|public| |10|
|`ASSERT_CALLABLE`|public| |11|
|`ASSERT_DOCUMENTS_MATCH`|public| |12|

## Properties


### assertionType



```php
private int $assertionType
```






***

### expectedValue



```php
private mixed $expectedValue
```






***

### assertionCallable



```php
private callable $assertionCallable
```






***

## Methods


### __construct



```php
private __construct(int $assertionType, mixed $expectedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assertionType` | **int** |  |
| `$expectedValue` | **mixed** |  |




***

### fromChangeStreams



```php
public static fromChangeStreams(\stdClass $result, callable $assertionCallable): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\stdClass** |  |
| `$assertionCallable` | **callable** |  |




***

### fromClientSideEncryption



```php
public static fromClientSideEncryption(\stdClass $operation, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### fromCrud



```php
public static fromCrud(\stdClass $operation, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### fromReadWriteConcern



```php
public static fromReadWriteConcern(\stdClass $operation, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### fromRetryableReads



```php
public static fromRetryableReads(\stdClass $operation, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### fromRetryableWrites



```php
public static fromRetryableWrites(\stdClass $outcome, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$outcome` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### fromTransactions



```php
public static fromTransactions(\stdClass $operation, mixed $defaultAssertionType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\stdClass** |  |
| `$defaultAssertionType` | **mixed** |  |




***

### assert

Assert that the result expectation matches the actual outcome.

```php
public assert(\MongoDB\Tests\SpecTests\FunctionalTestCase $test, mixed $actual): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** | Test instance for performing assertions |
| `$actual` | **mixed** |  |




***

### isExpected



```php
public isExpected(): mixed
```











***

### isArrayOfObjects



```php
private static isArrayOfObjects(mixed $array): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |




***

### isErrorResult

Determines whether the result is actually an error expectation.

```php
private static isErrorResult(mixed $result): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |



**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/transactions/tests/README.rst#test-format - 

***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
