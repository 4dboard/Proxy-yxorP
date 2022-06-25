***

# ArrayUtils

Utility class for testing and manipulation of PHP arrays.

Declared abstract, as we have no need for instantiation.

* Full name: `\Zend\Stdlib\ArrayUtils`
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ARRAY_FILTER_USE_BOTH`|public| |1|
|`ARRAY_FILTER_USE_KEY`|public| |2|


## Methods


### hasStringKeys

Test whether an array contains one or more string keys

```php
public static hasStringKeys(mixed $value, bool $allowEmpty = false): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$allowEmpty` | **bool** | Should an empty array() return true |




***

### hasIntegerKeys

Test whether an array contains one or more integer keys

```php
public static hasIntegerKeys(mixed $value, bool $allowEmpty = false): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$allowEmpty` | **bool** | Should an empty array() return true |




***

### hasNumericKeys

Test whether an array contains one or more numeric keys.

```php
public static hasNumericKeys(mixed $value, bool $allowEmpty = false): bool
```

A numeric key can be one of the following:
- an integer 1,
- a string with a number '20'
- a string with negative number: '-1000'
- a float: 2.2120, -78.150999
- a string with float:  '4000.99999', '-10.10'

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$allowEmpty` | **bool** | Should an empty array() return true |




***

### isList

Test whether an array is a list

```php
public static isList(mixed $value, bool $allowEmpty = false): bool
```

A list is a collection of values assigned to continuous integer keys
starting at 0 and ending at count() - 1.

For example:
<code>
$list = array('a', 'b', 'c', 'd');
$list = array(
    0 => 'foo',
    1 => 'bar',
    2 => array('foo' => 'baz'),
);
</code>

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$allowEmpty` | **bool** | Is an empty list a valid list? |




***

### isHashTable

Test whether an array is a hash table.

```php
public static isHashTable(mixed $value, bool $allowEmpty = false): bool
```

An array is a hash table if:

1. Contains one or more non-integer keys, or
2. Integer keys are non-continuous or misaligned (not starting with 0)

For example:
<code>
$hash = array(
    'foo' => 15,
    'bar' => false,
);
$hash = array(
    1995  => 'Birth of PHP',
    2009  => 'PHP 5.3.0',
    2012  => 'PHP 5.4.0',
);
$hash = array(
    'formElement,
    'options' => array( 'debug' => true ),
);
</code>

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$allowEmpty` | **bool** | Is an empty array() a valid hash table? |




***

### inArray

Checks if a value exists in an array.

```php
public static inArray(mixed $needle, array $haystack, int|bool $strict = false): bool
```

Due to "foo" == 0 === TRUE with in_array when strict = false, an option
has been added to prevent this. When $strict = 0/false, the most secure
non-strict check is implemented. if $strict = -1, the default in_array
non-strict behaviour is used.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **mixed** |  |
| `$haystack` | **array** |  |
| `$strict` | **int&#124;bool** |  |




***

### iteratorToArray

Convert an iterator to an array.

```php
public static iteratorToArray(array|\Traversable $iterator, bool $recursive = true): array
```

Converts an iterator to an array. The $recursive flag, on by default,
hints whether or not you want to do so recursively.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **array&#124;\Traversable** | The array or Traversable object to convert |
| `$recursive` | **bool** | Recursively check all nested structures |




***

### merge

Merge two arrays together.

```php
public static merge(array $a, array $b, bool $preserveNumericKeys = false): array
```

If an integer key exists in both arrays and preserveNumericKeys is false, the value
from the second array will be appended to the first array. If both values are arrays, they
are merged together, else the value of the second array overwrites the one of the first array.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **array** |  |
| `$b` | **array** |  |
| `$preserveNumericKeys` | **bool** |  |




***

### filter

Compatibility Method for array_filter on <5.6 systems

```php
public static filter(array $data, callable $callback, null|int $flag = null): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$callback` | **callable** |  |
| `$flag` | **null&#124;int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
