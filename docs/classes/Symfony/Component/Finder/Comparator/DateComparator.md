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

yxorP::get('REQUEST')
