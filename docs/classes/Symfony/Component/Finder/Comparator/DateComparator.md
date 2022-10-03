***

# DateComparator

DateCompare compiles date comparisons.



* Full name: `\Symfony\Component\Finder\Comparator\DateComparator`
* Parent class: [`\Symfony\Component\Finder\Comparator\Comparator`](./Comparator.md)




## Methods


### __construct



```php
public __construct(string $test): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **string** | A comparison string |




***


## Inherited methods


### __construct



```php
public __construct(string $target, string $operator = &#039;==&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |
| `$operator` | **string** |  |




***

### getTarget

Gets the target value.

```php
public getTarget(): string
```











***

### getOperator

Gets the comparison operator.

```php
public getOperator(): string
```











***

### test

Tests against the target.

```php
public test(mixed $test): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **mixed** |  |




***


***

