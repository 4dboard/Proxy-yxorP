***

# FilterChain





* Full name: `\Zend\Filter\FilterChain`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)
* This class implements:
[`\Countable`](../../Countable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_PRIORITY`|public| |1000|

## Properties


### plugins



```php
protected \Zend\Filter\FilterPluginManager $plugins
```






***

### filters

Filter chain

```php
protected \Zend\Stdlib\PriorityQueue $filters
```






***

## Methods


### __construct

Initialize filter chain

```php
public __construct(null|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable** |  |




***

### setOptions



```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### count

Return the count of attached filters

```php
public count(): int
```











***

### getPluginManager

Get plugin manager instance

```php
public getPluginManager(): \Zend\Filter\FilterPluginManager
```











***

### setPluginManager

Set plugin manager instance

```php
public setPluginManager(\Zend\Filter\FilterPluginManager $plugins): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugins` | **\Zend\Filter\FilterPluginManager** |  |




***

### plugin

Retrieve a filter plugin by name

```php
public plugin(mixed $name, array $options = array()): \Zend\Filter\FilterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$options` | **array** |  |




***

### attach

Attach a filter to the chain

```php
public attach(callable|\Zend\Filter\FilterInterface $callback, int $priority = self::DEFAULT_PRIORITY): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;\Zend\Filter\FilterInterface** | A Filter implementation or valid PHP callback |
| `$priority` | **int** | Priority at which to enqueue filter; defaults to 1000 (higher executes earlier) |




***

### attachByName

Attach a filter to the chain using a short name

```php
public attachByName(string $name, mixed $options = array(), int $priority = self::DEFAULT_PRIORITY): self
```

Retrieves the filter from the attached plugin manager, and then calls attach()
with the retrieved instance.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$options` | **mixed** |  |
| `$priority` | **int** | Priority at which to enqueue filter; defaults to 1000 (higher executes earlier) |




***

### merge

Merge the filter chain with the one given in parameter

```php
public merge(\Zend\Filter\FilterChain $filterChain): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterChain` | **\Zend\Filter\FilterChain** |  |




***

### getFilters

Get all the filters

```php
public getFilters(): \Zend\Stdlib\PriorityQueue
```











***

### filter

Returns $value filtered through each filter in the chain

```php
public filter(mixed $value): mixed
```

Filters are run in the order in which they were added to the chain (FIFO)






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### __clone

Clone filters

```php
public __clone(): mixed
```











***

### __sleep

Prepare filter chain for serialization

```php
public __sleep(): mixed
```

Plugin manager (property 'plugins') cannot
be serialized. On wakeup the property remains unset
and next invocation to getPluginManager() sets
the default plugin manager instance (FilterPluginManager).









***


## Inherited methods


### hasPcreUnicodeSupport



```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### setOptions



```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```











***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isOptions



```php
protected static isOptions(mixed $options): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
