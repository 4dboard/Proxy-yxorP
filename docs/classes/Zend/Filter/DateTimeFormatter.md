***

# DateTimeFormatter





* Full name: `\Zend\Filter\DateTimeFormatter`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)



## Properties


### format

A valid format string accepted by date()

```php
protected string $format
```






***

## Methods


### __construct

Sets filter options

```php
public __construct(array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### setFormat

Set the format string accepted by date() to use when formatting a string

```php
public setFormat(string $format): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |




***

### filter

Filter a datetime string by normalizing it to the filters specified format

```php
public filter(\DateTime|string|int $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\DateTime&#124;string&#124;int** |  |




***

### normalizeDateTime

Normalize the provided value to a formatted string

```php
protected normalizeDateTime(string|int|\DateTime $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;int&#124;\DateTime** |  |




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
