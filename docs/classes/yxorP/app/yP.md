***

# yP

It's a class that's used to dispatch events.



* Full name: `\yxorP\app\yP`



## Properties


### instance



```php
private static ?\yxorP\app\yP $instance
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

It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function

```php
public __construct(string $root, array|null $request = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |
| `$request` | **array&#124;null** |  |




***

### init



```php
private init(?array $request): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **?array** |  |


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

### loadActions



```php
final public static loadActions(): void
```



* This method is **static**.

* This method is **final**.



**Return Value:**

A method that takes an array as a parameter and returns nothing.



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

### addListener

This function adds a listener to the listeners array

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


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
