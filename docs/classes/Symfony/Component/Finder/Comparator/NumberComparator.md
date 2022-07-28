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

