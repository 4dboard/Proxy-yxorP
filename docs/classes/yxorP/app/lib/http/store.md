***

# store

It's a class that's used to dispatch events.



* Full name: `\yxorP\app\lib\http\store`




## Methods


### handler

Try get perm else store value or execute function, set perm and return values

```php
final public static handler(string $name, mixed $value = null, string|null $func = null, array $varibles = []): mixed
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |
| `$func` | **string&#124;null** |  |
| `$varibles` | **array** |  |




***

### check

Try get perm else store value or execute function, set perm and return values

```php
private static check(string $name, mixed $value = null, string|null $func = null, array $varibles = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |
| `$func` | **string&#124;null** |  |
| `$varibles` | **array** |  |




***

### get

It's setting the value of the variable $name to the value of the variable $_value.

```php
private static get(string $name): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### set

It's setting the value of the variable $name to the value of the variable $_value.

```php
public static set(string $name, mixed $value, string|null $func = null, array $varibles = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |
| `$func` | **string&#124;null** |  |
| `$varibles` | **array** |  |




***


***

