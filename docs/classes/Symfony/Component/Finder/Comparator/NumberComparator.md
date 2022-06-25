***

# NumberComparator

NumberComparator compiles a simple comparison to an anonymous
subroutine, which you can call with a value to be tested again.

Now this would be very pointless, if NumberCompare didn't understand
magnitudes.

The target value may use magnitudes of kilobytes (k, ki),
megabytes (m, mi), or gigabytes (g, gi).  Those suffixed
with an i use the appropriate 2**n version in accordance with the
IEC standard: http://physics.nist.gov/cuu/Units/binary.html

Based on the Perl Number::Compare module.

* Full name: `\Symfony\Component\Finder\Comparator\NumberComparator`
* Parent class: [`\Symfony\Component\Finder\Comparator\Comparator`](./Comparator.md)

**See Also:**

* http://physics.nist.gov/cuu/Units/binary.html - 




## Methods


### __construct



```php
public __construct(string|int $test): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **string&#124;int** | A comparison string or an integer |




***


## Inherited methods


### getTarget

Gets the target value.

```php
public getTarget(): string
```









**Return Value:**

The target value



***

### setTarget

Sets the target value.

```php
public setTarget(string $target): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** | The target value |




***

### getOperator

Gets the comparison operator.

```php
public getOperator(): string
```









**Return Value:**

The operator



***

### setOperator

Sets the comparison operator.

```php
public setOperator(string $operator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operator` | **string** | A valid operator |




***

### test

Tests against the target.

```php
public test(mixed $test): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **mixed** | A test value |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
