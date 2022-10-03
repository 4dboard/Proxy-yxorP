***

# LazyString

A string whose value is computed lazily by a callback.



* Full name: `\Symfony\Component\String\LazyString`
* This class implements:
[`\Stringable`](../../../Stringable.md), [`\JsonSerializable`](../../../JsonSerializable.md)



## Properties


### value



```php
private \Closure|string $value
```






***

## Methods


### fromCallable



```php
public static fromCallable(callable|array $callback, mixed $arguments): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;array** | A callable or a [Closure, method] lazy-callable |
| `$arguments` | **mixed** |  |




***

### fromStringable



```php
public static fromStringable(string|int|float|bool|\Stringable $value): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;int&#124;float&#124;bool&#124;\Stringable** |  |




***

### isStringable

Tells whether the provided value can be cast to string.

```php
final public static isStringable(mixed $value): bool
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### resolve

Casts scalars and stringable objects to strings.

```php
final public static resolve(\Stringable|string|int|float|bool $value): string
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\Stringable&#124;string&#124;int&#124;float&#124;bool** |  |




***

### __toString



```php
public __toString(): string
```











***

### __sleep



```php
public __sleep(): array
```











***

### jsonSerialize



```php
public jsonSerialize(): string
```











***

### __construct



```php
private __construct(): mixed
```











***

### getPrettyName



```php
private static getPrettyName(callable $callback): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |




***


***

