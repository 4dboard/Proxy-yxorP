***

# Comparator





* Full name: `\Symfony\Component\Finder\Comparator\Comparator`



## Properties


### target



```php
private string $target
```






***

### operator



```php
private string $operator
```






***

## Methods


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

