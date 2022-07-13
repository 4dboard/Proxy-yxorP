***

# DocumentsMatchConstraint

Constraint that checks if one document matches another.

The expected value is passed in the constructor.

* Full name: `\MongoDB\Tests\SpecTests\DocumentsMatchConstraint`
* Parent class: [`Constraint`](../../../PHPUnit/Framework/Constraint/Constraint.md)



## Properties


### ignoreExtraKeysInRoot



```php
private bool $ignoreExtraKeysInRoot
```






***

### ignoreExtraKeysInEmbedded



```php
private bool $ignoreExtraKeysInEmbedded
```






***

### placeholders



```php
private array $placeholders
```






***

### sortKeys

TODO: This is not currently used, but was preserved from the design of
TestCase::assertMatchesDocument(), which would sort keys and then compare
documents as JSON strings. If the TODO item in matches() is implemented
to make document comparisons more efficient, we may consider supporting
this option.

```php
private bool $sortKeys
```






***

### value



```php
private \MongoDB\Model\BSONArray|\MongoDB\Model\BSONDocument $value
```






***

### lastFailure



```php
private \SebastianBergmann\Comparator\ComparisonFailure|null $lastFailure
```






***

### comparatorFactory



```php
private \SebastianBergmann\Comparator\Factory $comparatorFactory
```






***

## Methods


### __construct

Creates a new constraint.

```php
public __construct(array|object $value, bool $ignoreExtraKeysInRoot = false, bool $ignoreExtraKeysInEmbedded = false, array $placeholders = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array&#124;object** |  |
| `$ignoreExtraKeysInRoot` | **bool** | If true, ignore extra keys within the root document |
| `$ignoreExtraKeysInEmbedded` | **bool** | If true, ignore extra keys within embedded documents |
| `$placeholders` | **array** | Placeholders for any value |




***

### doEvaluate



```php
private doEvaluate(mixed $other, mixed $description = &#039;&#039;, mixed $returnResult = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |
| `$description` | **mixed** |  |
| `$returnResult` | **mixed** |  |




***

### assertBSONType



```php
private assertBSONType(string $expectedType, mixed $actualValue): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedType` | **string** |  |
| `$actualValue` | **mixed** |  |




***

### assertEquals

Compares two documents recursively.

```php
private assertEquals(\ArrayObject $expected, \ArrayObject $actual, bool $ignoreExtraKeys, string $keyPrefix = &#039;&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **\ArrayObject** |  |
| `$actual` | **\ArrayObject** |  |
| `$ignoreExtraKeys` | **bool** |  |
| `$keyPrefix` | **string** |  |




***

### doAdditionalFailureDescription



```php
private doAdditionalFailureDescription(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




***

### doFailureDescription



```php
private doFailureDescription(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




***

### doMatches



```php
private doMatches(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




***

### doToString



```php
private doToString(): mixed
```











***

### prepareBSON

Prepare a BSON document or array for comparison.

```php
private prepareBSON(array|object $bson, bool $isRoot, bool $sortKeys = false): \MongoDB\Model\BSONDocument|\MongoDB\Model\BSONArray
```

The argument will be converted to a BSONArray or BSONDocument based on
its type and keys. Keys within documents will optionally be sorted. Each
value within the array or document will then be prepared recursively.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bson` | **array&#124;object** |  |
| `$isRoot` | **bool** | If true, ensure an array value is converted to a document |
| `$sortKeys` | **bool** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
