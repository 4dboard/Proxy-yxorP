***

# Operation





* Full name: `\MongoDB\Tests\UnifiedSpecTests\Operation`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OBJECT_TEST_RUNNER`|public| |&#039;testRunner&#039;|

## Properties


### isTestRunnerOperation



```php
private bool $isTestRunnerOperation
```






***

### name



```php
private string $name
```






***

### object



```php
private ?string $object
```






***

### arguments



```php
private array $arguments
```






***

### context



```php
private \MongoDB\Tests\UnifiedSpecTests\Context $context
```






***

### entityMap



```php
private \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap
```






***

### expectedError



```php
private \MongoDB\Tests\UnifiedSpecTests\ExpectedError $expectedError
```






***

### expectedResult



```php
private \MongoDB\Tests\UnifiedSpecTests\ExpectedResult $expectedResult
```






***

### ignoreResultAndError



```php
private bool $ignoreResultAndError
```






***

### saveResultAsEntity



```php
private string $saveResultAsEntity
```






***

## Methods


### __construct



```php
public __construct(\stdClass $o, \MongoDB\Tests\UnifiedSpecTests\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$o` | **\stdClass** |  |
| `$context` | **\MongoDB\Tests\UnifiedSpecTests\Context** |  |




***

### assert

Execute the operation and assert its outcome.

```php
public assert(bool $rethrowExceptions = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rethrowExceptions` | **bool** |  |




***

### execute



```php
private execute(): mixed
```











***

### executeForChangeStream



```php
private executeForChangeStream(\MongoDB\ChangeStream $changeStream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$changeStream` | **\MongoDB\ChangeStream** |  |




***

### executeForClient



```php
private executeForClient(\MongoDB\Client $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\MongoDB\Client** |  |




***

### executeForCollection



```php
private executeForCollection(\MongoDB\Collection $collection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\MongoDB\Collection** |  |




***

### executeForCursor



```php
private executeForCursor(\MongoDB\Driver\Cursor $cursor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **\MongoDB\Driver\Cursor** |  |




***

### executeForDatabase



```php
private executeForDatabase(\MongoDB\Database $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **\MongoDB\Database** |  |




***

### executeForSession



```php
private executeForSession(\MongoDB\Driver\Session $session): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session` | **\MongoDB\Driver\Session** |  |




***

### executeForBucket



```php
private executeForBucket(\MongoDB\GridFS\Bucket $bucket): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bucket` | **\MongoDB\GridFS\Bucket** |  |




***

### executeForTestRunner



```php
private executeForTestRunner(): mixed
```











***

### getIndexNames



```php
private getIndexNames(string $databaseName, string $collectionName): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** |  |
| `$collectionName` | **string** |  |




***

### prepareArguments



```php
private prepareArguments(): array
```











***

### prepareBulkWriteRequest



```php
private static prepareBulkWriteRequest(\stdClass $request): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\stdClass** |  |




***

### prepareUploadArguments



```php
private static prepareUploadArguments(array $args): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |




***


***

