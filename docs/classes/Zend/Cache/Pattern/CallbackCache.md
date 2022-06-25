***

# CallbackCache





* Full name: `\Zend\Cache\Pattern\CallbackCache`
* Parent class: [`\Zend\Cache\Pattern\AbstractPattern`](./AbstractPattern.md)




## Methods


### setOptions

Set options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\CallbackCache
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |




***

### call

Call the specified callback or get the result from cache

```php
public call(callable $callback, array $args = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |


**Return Value:**

Result



***

### __call

function call handler

```php
public __call(string $function, array $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **string** | Function name to call |
| `$args` | **array** | Function arguments |




***

### generateKey

Generate a unique key in base of a key representing the callback part
and a key representing the arguments part.

```php
public generateKey(callable $callback, array $args = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |




***

### generateCallbackKey

Generate a unique key in base of a key representing the callback part
and a key representing the arguments part.

```php
protected generateCallbackKey(callable $callback, array $args): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |




***

### generateArgumentsKey

Generate a unique key of the argument part.

```php
protected generateArgumentsKey(array $args): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |




***


## Inherited methods


### setOptions

Set pattern options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\AbstractPattern
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |




***

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Pattern\PatternOptions
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
