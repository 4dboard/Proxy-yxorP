***

# ObjectCache





* Full name: `\Zend\Cache\Pattern\ObjectCache`
* Parent class: [`\Zend\Cache\Pattern\CallbackCache`](./CallbackCache.md)




## Methods


### setOptions

Set options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |




***

### call

Call and cache a class method

```php
public call(string $method, array $args = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method name to call |
| `$args` | **array** | Method arguments |




***

### generateKey

Generate a unique key in base of a key representing the callback part
and a key representing the arguments part.

```php
public generateKey(string $method, array $args = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The method |
| `$args` | **array** | Callback arguments |




***

### generateCallbackKey

Generate a unique key in base of a key representing the callback part
and a key representing the arguments part.

```php
protected generateCallbackKey(callable $callback, array $args = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |




***

### __call

Class method call handler

```php
public __call(string $method, array $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method name to call |
| `$args` | **array** | Method arguments |




***

### __set

Writing data to properties.

```php
public __set(string $name, mixed $value): void
```

NOTE:
Magic properties will be cached too if the option cacheMagicProperties
is enabled and the property doesn't exist in real. If so it calls __set
and removes cached data of previous __get and __isset calls.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |



**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members - 

***

### __get

Reading data from properties.

```php
public __get(string $name): mixed
```

NOTE:
Magic properties will be cached too if the option cacheMagicProperties
is enabled and the property doesn't exist in real. If so it calls __get.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |



**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members - 

***

### __isset

Checking existing properties.

```php
public __isset(string $name): bool
```

NOTE:
Magic properties will be cached too if the option cacheMagicProperties
is enabled and the property doesn't exist in real. If so it calls __get.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |



**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members - 

***

### __unset

Unseting a property.

```php
public __unset(string $name): void
```

NOTE:
Magic properties will be cached too if the option cacheMagicProperties
is enabled and the property doesn't exist in real. If so it removes
previous cached __isset and __get calls.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |



**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members - 

***

### __toString

Handle casting to string

```php
public __toString(): string
```










**See Also:**

* http://php.net/manual/language.oop5.magic.php#language.oop5.magic.tostring - 

***

### __invoke

Handle invoke calls

```php
public __invoke(): mixed
```










**See Also:**

* http://php.net/manual/language.oop5.magic.php#language.oop5.magic.invoke - 

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

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Pattern\PatternOptions
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
