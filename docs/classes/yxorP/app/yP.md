***

# yP

It's a class that's used to dispatch events.



* Full name: `\yxorP\app\yP`



## Properties


### instance



```php
private static $instance
```



* This property is **static**.


***

### listeners



```php
private array $listeners
```






***

## Methods


### __construct



```php
final private __construct(): mixed
```





* This method is **final**.





***

### proxy

It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function

```php
final public static proxy(string $root, array|null $request = null): void
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |
| `$request` | **array&#124;null** |  |




***

### init



```php
public static init(?array $request, string $root): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **?array** |  |
| `$root` | **string** |  |


**Return Value:**

A method that takes an array as a parameter and returns nothing.



***

### autoLoader

It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
`autoLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
requiring it.

```php
final protected static autoLoader(string $root): void
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |




***

### override

It's setting the value of the variable $_name to the value of the variable $_value.

```php
final public static override(string $_name, string|array|object|null $_value): string|array|object|null
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$_name` | **string** |  |
| `$_value` | **string&#124;array&#124;object&#124;null** |  |




***

### set

It's setting the value of the variable $_name to the value of the variable $_value.

```php
final public static set(string $_name, string|array|object|null $_value): string|array|object|null
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$_name` | **string** |  |
| `$_value` | **string&#124;array&#124;object&#124;null** |  |




***

### get

It's checking if the key exists in the global array. If it does, it returns the value of the key. If it doesn't, it
returns false.

```php
final public static get(string $_name): string|array|object|null
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$_name` | **string** |  |




***

### subscribe

It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
class exists in the yxorP namespace, if it does, it creates an instance of it

```php
private subscribe(string $root, string $action): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |
| `$action` | **string** |  |




***

### tmp

It's setting the value of the variable $_name to the value of the variable $_value.

```php
final public static tmp(string $_name, string|array|object|null $_value): string|array|object|null
```

tmp is a temporary variable that's used to store the value of the variable $_name.
Temporary variables are stored in the `$GLOBALS[VAR_TMP_STORE]` array.
Temporary variables are not stored in the persisted storage.

* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$_name` | **string** |  |
| `$_value` | **string&#124;array&#124;object&#124;null** |  |




***

### dispatch

The function is checking if there are any listeners for the event, and if there are, it's looping through them and calling
them.

```php
private dispatch(string $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **string** |  |




***

### assetLoader

It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
`assetLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
requiring it.

```php
final public static assetLoader(string $root): void
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |




***

### addListener

> This function adds a listener to the listeners array

```php
final public addListener(string $event, object $callback): void
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$callback` | **object** |  |


**Return Value:**

The priority of the listener. Higher priority listeners are called before lower priority listeners.



***

### addSubscriber

It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it, and
passing the `self::$instance` object to it

```php
private addSubscriber(object $subscriber): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscriber` | **object** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
