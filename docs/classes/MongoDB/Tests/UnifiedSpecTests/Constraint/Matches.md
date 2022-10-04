***

# Matches

Constraint that checks if one value matches another.

The expected value is passed in the constructor. An EntityMap may be supplied
for resolving operators (e.g. $$matchesEntity). Behavior for allowing extra
keys in root documents and processing operators is also configurable.

* Full name: `\MongoDB\Tests\UnifiedSpecTests\Constraint\Matches`
* Parent class: [`Constraint`](../../../../PHPUnit/Framework/Constraint/Constraint.md)



## Properties


### entityMap



```php
private \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap
```






***

### value



```php
private mixed $value
```






***

### allowExtraRootKeys



```php
private bool $allowExtraRootKeys
```






***

### allowOperators



```php
private bool $allowOperators
```






***

### lastFailure



```php
private \SebastianBergmann\Comparator\ComparisonFailure|null $lastFailure
```






***

## Methods


### __construct



```php
public __construct(mixed $value, ?\MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap = null, mixed $allowExtraRootKeys = true, mixed $allowOperators = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$entityMap` | **?\MongoDB\Tests\UnifiedSpecTests\EntityMap** |  |
| `$allowExtraRootKeys` | **mixed** |  |
| `$allowOperators` | **mixed** |  |




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

### assertEquals



```php
private assertEquals(mixed $expected, mixed $actual, string $keyPath): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$actual` | **mixed** |  |
| `$keyPath` | **string** |  |




***

### assertMatches



```php
private assertMatches(mixed $expected, mixed $actual, string $keyPath = &#039;&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$actual` | **mixed** |  |
| `$keyPath` | **string** |  |




***

### assertMatchesArray



```php
private assertMatchesArray(\MongoDB\Model\BSONArray $expected, mixed $actual, string $keyPath): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **\MongoDB\Model\BSONArray** |  |
| `$actual` | **mixed** |  |
| `$keyPath` | **string** |  |




***

### assertMatchesDocument



```php
private assertMatchesDocument(\MongoDB\Model\BSONDocument $expected, mixed $actual, string $keyPath): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **\MongoDB\Model\BSONDocument** |  |
| `$actual` | **mixed** |  |
| `$keyPath` | **string** |  |




***

### assertMatchesOperator



```php
private assertMatchesOperator(\MongoDB\Model\BSONDocument $operator, mixed $actual, string $keyPath): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operator` | **\MongoDB\Model\BSONDocument** |  |
| `$actual` | **mixed** |  |
| `$keyPath` | **string** |  |




***

### doAdditionalFailureDescription



```php
private doAdditionalFailureDescription(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |



**See Also:**

* \Symfony\Bridge\PhpUnit\ConstraintTrait - 

***

### doFailureDescription



```php
private doFailureDescription(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |



**See Also:**

* \Symfony\Bridge\PhpUnit\ConstraintTrait - 

***

### doMatches



```php
private doMatches(mixed $other): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |



**See Also:**

* \Symfony\Bridge\PhpUnit\ConstraintTrait - 

***

### doToString



```php
private doToString(): mixed
```










**See Also:**

* \Symfony\Bridge\PhpUnit\ConstraintTrait - 

***

### failAt



```php
private static failAt(string $message, string $keyPath): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$keyPath` | **string** |  |




***

### getOperatorName



```php
private static getOperatorName(\MongoDB\Model\BSONDocument $document): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\MongoDB\Model\BSONDocument** |  |




***

### isNumeric



```php
private static isNumeric(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isOperator



```php
private static isOperator(\MongoDB\Model\BSONDocument $document): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\MongoDB\Model\BSONDocument** |  |




***

### prepare

Prepare a value for comparison.

```php
private static prepare(mixed $bson): mixed
```

If the value is an array or object, it will be converted to a BSONArray
or BSONDocument. If $value is an array and $isRoot is true, it will be
converted to a BSONDocument; otherwise, it will be converted to a
BSONArray or BSONDocument based on its keys. Each value within an array
or document will then be prepared recursively.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bson` | **mixed** |  |




***

### isArrayEmptyOrIndexed



```php
private static isArrayEmptyOrIndexed(array $a): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **array** |  |




***


***

