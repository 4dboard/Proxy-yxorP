***

# Application

Application class for phpDocumentor.

Can be used as bootstrap when the run method is not invoked.

* Full name: `\phpDocumentor\Application`
* Parent class: [`\Cilex\Application`](../Cilex/Application.md)



## Properties


### VERSION



```php
public static string $VERSION
```



* This property is **static**.


***

## Methods


### __construct

Initializes all components used by phpDocumentor.

```php
public __construct(\Composer\Autoload\ClassLoader $autoloader = null, array $values = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$autoloader` | **\Composer\Autoload\ClassLoader** |  |
| `$values` | **array** |  |




***

### configureLogger

Removes all logging handlers and replaces them with handlers that can write to the given logPath and level.

```php
public configureLogger(\Monolog\Logger $logger, int $level, string $logPath = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** | The logger instance that needs to be configured. |
| `$level` | **int** | The minimum level that will be written to the normal logfile; matches one of the<br />constants in {@see}. |
| `$logPath` | **string** | The full path where the normal log file needs to be written. |




***

### run

Run the application and if no command is provided, use project:run.

```php
public run(bool $interactive = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interactive` | **bool** | Whether to run in interactive mode. |




***

### defineIniSettings

Adjust php.ini settings.

```php
protected defineIniSettings(): void
```











***

### setTimezone

If the timezone is not set anywhere, set it to UTC.

```php
protected setTimezone(): void
```

This is done to prevent any warnings being outputted in relation to using
date/time functions. What is checked is php.ini, and if the PHP version
is prior to 5.4, the TZ environment variable.








**See Also:**

* http://php.net/manual/en/function.date-default-timezone-get.php - for more information how PHP determines the
default timezone.

***

### addLogging

Adds a logging provider to the container of phpDocumentor.

```php
protected addLogging(): void
```











***

### addEventDispatcher

Adds the event dispatcher to phpDocumentor's container.

```php
protected addEventDispatcher(): void
```











***

### addCommandsForProjectNamespace

Adds the command to phpDocumentor that belong to the Project namespace.

```php
protected addCommandsForProjectNamespace(): void
```











***

### addCommandsForPharNamespace

Adds the command to phpDocumentor that belong to the Phar namespace.

```php
protected addCommandsForPharNamespace(): void
```











***


## Inherited methods


### __construct

Instantiate the container.

```php
public __construct(array $values = array()): mixed
```

Objects and parameters can be passed as argument to the constructor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | The parameters or objects. |




***

### run

Executes this application.

```php
public run(bool $interactive = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interactive` | **bool** | runs in an interactive shell if true. |




***

### command

Adds a command object.

```php
public command(\Cilex\Command\Command $command): void
```

If a command with the same name already exists, it will be overridden.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Cilex\Command\Command** | A Command object |




***

### register

Registers a service provider.

```php
public register(\Cilex\ServiceProviderInterface|\Silex\ServiceProviderInterface $provider, array $values = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$provider` | **\Cilex\ServiceProviderInterface&#124;\Silex\ServiceProviderInterface** | A ServiceProviderInterface instance |
| `$values` | **array** | An array of values that customizes the provider |




***

### offsetSet

Sets a parameter or an object.

```php
public offsetSet(string $id, mixed $value): mixed
```

Objects must be defined as Closures.

Allowing any PHP callable leads to difficult to debug problems
as function names (strings) are callable (creating a function with
the same a name as an existing parameter would break your container).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the parameter or object |
| `$value` | **mixed** | The value of the parameter or a closure to defined an object |




***

### offsetGet

Gets a parameter or an object.

```php
public offsetGet(string $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the parameter or object |


**Return Value:**

The value of the parameter or an object



***

### offsetExists

Checks if a parameter or an object is set.

```php
public offsetExists(string $id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the parameter or object |




***

### offsetUnset

Unsets a parameter or an object.

```php
public offsetUnset(string $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the parameter or object |




***

### share

Returns a closure that stores the result of the given service definition
for uniqueness in the scope of this instance of Pimple.

```php
public static share(callable $callable): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | A service definition to wrap for uniqueness |


**Return Value:**

The wrapped closure



***

### protect

Protects a callable from being interpreted as a service.

```php
public static protect(callable $callable): \Closure
```

This is useful when you want to store a callable as a parameter.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | A callable to protect from being evaluated |


**Return Value:**

The protected closure



***

### raw

Gets a parameter or the closure defining an object.

```php
public raw(string $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the parameter or object |


**Return Value:**

The value of the parameter or the closure defining an object



***

### extend

Extends an object definition.

```php
public extend(string $id, callable $callable): \Closure
```

Useful when you want to extend an existing object definition,
without necessarily loading that object.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The unique identifier for the object |
| `$callable` | **callable** | A service definition to extend the original |


**Return Value:**

The wrapped closure



***

### keys

Returns all defined value names.

```php
public keys(): array
```









**Return Value:**

An array of value names



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
