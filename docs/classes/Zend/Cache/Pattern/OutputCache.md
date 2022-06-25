***

# OutputCache





* Full name: `\Zend\Cache\Pattern\OutputCache`
* Parent class: [`\Zend\Cache\Pattern\AbstractPattern`](./AbstractPattern.md)



## Properties


### keyStack

The key stack

```php
protected array $keyStack
```






***

## Methods


### setOptions

Set options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\OutputCache
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |




***

### start

if there is a cached item with the given key display it's data and return true
else start buffering output until end() is called or the script ends.

```php
public start(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Key |




***

### end

Stops buffering output, write buffered data to cache using the given key on start()
and displays the buffer.

```php
public end(): bool
```









**Return Value:**

TRUE on success, FALSE on failure writing to cache



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
