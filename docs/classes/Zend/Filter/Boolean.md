***

# Boolean





* Full name: `\Zend\Filter\Boolean`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_BOOLEAN`|public| |1|
|`TYPE_INTEGER`|public| |2|
|`TYPE_FLOAT`|public| |4|
|`TYPE_STRING`|public| |8|
|`TYPE_ZERO_STRING`|public| |16|
|`TYPE_EMPTY_ARRAY`|public| |32|
|`TYPE_NULL`|public| |64|
|`TYPE_PHP`|public| |127|
|`TYPE_FALSE_STRING`|public| |128|
|`TYPE_LOCALIZED`|public| |256|
|`TYPE_ALL`|public| |511|

## Properties


### constants



```php
protected array $constants
```






***

### options

Filter options

```php
protected array $options
```






***

## Methods


### __construct

Constructor

```php
public __construct(array|\Traversable|int|null $typeOrOptions = null, bool $casting = true, array $translations = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeOrOptions` | **array&#124;\Traversable&#124;int&#124;null** |  |
| `$casting` | **bool** |  |
| `$translations` | **array** |  |




***

### setType

Set boolean types

```php
public setType(int|array $type = null): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int&#124;array** |  |




***

### getType

Returns defined boolean types

```php
public getType(): int
```











***

### setCasting

Set the working mode

```php
public setCasting(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | When true this filter works like cast<br />When false it recognises only true and false<br />and all other values are returned as is |




***

### getCasting

Returns the casting option

```php
public getCasting(): bool
```











***

### setTranslations



```php
public setTranslations(array|\Traversable $translations): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translations` | **array&#124;\Traversable** |  |




***

### getTranslations



```php
public getTranslations(): array
```











***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string
```

Returns a boolean representation of $value






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




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
