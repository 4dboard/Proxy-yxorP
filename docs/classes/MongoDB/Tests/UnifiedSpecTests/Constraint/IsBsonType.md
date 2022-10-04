***

# IsBsonType





* Full name: `\MongoDB\Tests\UnifiedSpecTests\Constraint\IsBsonType`
* Parent class: [`Constraint`](../../../../PHPUnit/Framework/Constraint/Constraint.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### types



```php
private static array $types
```



* This property is **static**.


***

### type



```php
private string $type
```






***

## Methods


### __construct



```php
public __construct(string $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### any



```php
public static any(): \PHPUnit\Framework\Constraint\LogicalOr
```



* This method is **static**.







***

### anyOf



```php
public static anyOf(string $types): \PHPUnit\Framework\Constraint\Constraint
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **string** |  |




***

### doMatches



```php
private doMatches(mixed $other): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




***

### doToString



```php
private doToString(): string
```











***

### isArray



```php
private static isArray(mixed $other): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




***

### isObject



```php
private static isObject(mixed $other): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **mixed** |  |




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

