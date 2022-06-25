***

# Application

The Cilex framework class.



* Full name: `\Cilex\Application`
* Parent class: [`\Pimple`](../Pimple.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;1.0.0&#039;|


## Methods


### __construct

Registers the autoloader and necessary components.

```php
public __construct(string $name, string|null $version = null, array $values = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name for this application. |
| `$version` | **string&#124;null** | Version number for this application. |
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
