***

# PregReplace





* Full name: `\Zend\Filter\PregReplace`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)



## Properties


### options

Filter options

```php
protected array $options
```






***

## Methods


### __construct

Constructor
Supported options are
    'pattern'     => matching pattern
    'replacement' => replace with this

```php
public __construct(array|\Traversable|string|null $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;string&#124;null** |  |




***

### setPattern

Set the regex pattern to search for

```php
public setPattern(string|array $pattern): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string&#124;array** | - same as the first argument of preg_replace |



**See Also:**

* \Zend\Filter\preg_replace() - 

***

### getPattern

Get currently set match pattern

```php
public getPattern(): string|array
```











***

### setReplacement

Set the replacement array/string

```php
public setReplacement(array|string $replacement): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **array&#124;string** | - same as the second argument of preg_replace |



**See Also:**

* \Zend\Filter\preg_replace() - 

***

### getReplacement

Get currently set replacement value

```php
public getReplacement(): string|array
```











***

### filter

Perform regexp replacement as filter

```php
public filter(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### validatePattern

Validate a pattern and ensure it does not contain the "e" modifier

```php
protected validatePattern(string $pattern): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |




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
