***

# UnderscoreToCamelCase





* Full name: `\Zend\Filter\Word\UnderscoreToCamelCase`
* Parent class: [`\Zend\Filter\Word\SeparatorToCamelCase`](./SeparatorToCamelCase.md)




## Methods


### __construct

Constructor

```php
public __construct(): mixed
```











***


## Inherited methods


### filter

Defined by Zend\Filter\Filter

```php
public filter(string|array $value): string|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** |  |




***

### __construct

Constructor

```php
public __construct(string $separator = &#039; &#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Space by default |




***

### setSeparator

Sets a new separator

```php
public setSeparator(string $separator): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Separator |




***

### getSeparator

Returns the actual set separator

```php
public getSeparator(): string
```











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
