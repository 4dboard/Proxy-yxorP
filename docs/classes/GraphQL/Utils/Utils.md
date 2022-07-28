***

# Utils





* Full name: `\GraphQL\Utils\Utils`




## Methods


### undefined



```php
public static undefined(): mixed
```



* This method is **static**.







***

### isInvalid

Check if the value is invalid

```php
public static isInvalid(mixed $value): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### assign



```php
public static assign(object $obj, array $vars, string[] $requiredKeys = []): object
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |
| `$vars` | **array** |  |
| `$requiredKeys` | **string[]** |  |




***

### find



```php
public static find(iterable $iterable, callable $predicate): mixed|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$predicate` | **callable** |  |




***

### filter



```php
public static filter(iterable $iterable, callable $predicate): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$predicate` | **callable** |  |




***

### map



```php
public static map(iterable $iterable, callable $fn): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$fn` | **callable** |  |




***

### mapKeyValue



```php
public static mapKeyValue(iterable $iterable, callable $fn): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$fn` | **callable** |  |




***

### keyMap



```php
public static keyMap(iterable $iterable, callable $keyFn): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$keyFn` | **callable** |  |




***

### each



```php
public static each(iterable $iterable, callable $fn): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$fn` | **callable** |  |




***

### groupBy

Splits original iterable to several arrays with keys equal to $keyFn return

```php
public static groupBy(iterable $iterable, callable $keyFn): array[]
```

E.g. Utils::groupBy([1, 2, 3, 4, 5], function($value) {return $value % 3}) will output:
[
   1 => [1, 4],
   2 => [2, 5],
   0 => [3],
]

$keyFn is also allowed to return array of keys. Then value will be added to all arrays with given keys

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$keyFn` | **callable** |  |




***

### keyValMap



```php
public static keyValMap(iterable $iterable, callable $keyFn, callable $valFn): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$keyFn` | **callable** |  |
| `$valFn` | **callable** |  |




***

### every



```php
public static every(iterable $iterable, callable $predicate): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$predicate` | **callable** |  |




***

### some



```php
public static some(iterable $iterable, callable $predicate): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$predicate` | **callable** |  |




***

### invariant



```php
public static invariant(bool $test, string $message = &#039;&#039;): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **bool** |  |
| `$message` | **string** |  |




***

### getVariableType



```php
public static getVariableType(\GraphQL\Type\Definition\Type|mixed $var): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **\GraphQL\Type\Definition\Type&#124;mixed** |  |




***

### printSafeJson



```php
public static printSafeJson(mixed $var): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |




***

### printSafe



```php
public static printSafe(\GraphQL\Type\Definition\Type|mixed $var): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **\GraphQL\Type\Definition\Type&#124;mixed** |  |




***

### chr

UTF-8 compatible chr()

```php
public static chr(string $ord, string $encoding = &#039;UTF-8&#039;): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ord` | **string** |  |
| `$encoding` | **string** |  |




***

### ord

UTF-8 compatible ord()

```php
public static ord(string $char, string $encoding = &#039;UTF-8&#039;): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |
| `$encoding` | **string** |  |




***

### charCodeAt

Returns UTF-8 char code at given $positing of the $string

```php
public static charCodeAt(string $string, int $position): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$position` | **int** |  |




***

### printCharCode



```php
public static printCharCode(int|null $code): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int&#124;null** |  |




***

### assertValidName

Upholds the spec rules about naming.

```php
public static assertValidName(string $name): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### isValidNameError

Returns an Error if a name is invalid.

```php
public static isValidNameError(string $name, \GraphQL\Language\AST\Node|null $node = null): \GraphQL\Error\Error|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$node` | **\GraphQL\Language\AST\Node&#124;null** |  |




***

### withErrorHandling

Wraps original callable with PHP error handling (using set_error_handler).

```php
public static withErrorHandling(callable $fn, \ErrorException[]& $errors): callable
```

Resulting callable will collect all PHP errors that occur during the call in $errors array.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** |  |
| `$errors` | **\ErrorException[]** |  |




***

### quotedOrList



```php
public static quotedOrList(string[] $items): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **string[]** |  |




***

### orList



```php
public static orList(string[] $items): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **string[]** |  |




***

### suggestionList

Given an invalid input string and a list of valid options, returns a filtered
list of valid options sorted based on their similarity with the input.

```php
public static suggestionList(string $input, string[] $options): string[]
```

Includes a custom alteration from Damerau-Levenshtein to treat case changes
as a single edit which helps identify mis-cased values with an edit distance
of 1

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** |  |
| `$options` | **string[]** |  |




***


***

