***

# UnderscoreToDash





* Full name: `\Zend\Filter\Word\UnderscoreToDash`
* Parent class: [`\Zend\Filter\Word\SeparatorToSeparator`](./SeparatorToSeparator.md)




## Methods


### __construct

Constructor

```php
public __construct(): mixed
```











***


## Inherited methods


### __construct

Constructor

```php
public __construct(string $searchSeparator = &#039; &#039;, string $replacementSeparator = &#039;-&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchSeparator` | **string** | Separator to search for |
| `$replacementSeparator` | **string** | Separator to replace with |




***

### setSearchSeparator

Sets a new seperator to search for

```php
public setSearchSeparator(string $separator): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Seperator to search for |




***

### getSearchSeparator

Returns the actual set separator to search for

```php
public getSearchSeparator(): string
```











***

### setReplacementSeparator

Sets a new separator which replaces the searched one

```php
public setReplacementSeparator(string $separator): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Separator which replaces the searched one |




***

### getReplacementSeparator

Returns the actual set separator which replaces the searched one

```php
public getReplacementSeparator(): string
```











***

### filter

Defined by Zend\Filter\Filter

```php
public filter(string|array $value): string|array
```

Returns the string $value, replacing the searched separators with the defined ones






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** |  |




***

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
