***

# Int

Stub class for backwards compatibility.

Since PHP 7 adds "int" as a reserved keyword, we can no longer have a class
named that and retain PHP 7 compatibility. The original class has been
renamed to "ToInt", and this class is now an extension of it. It raises an
E_USER_DEPRECATED to warn users to migrate.

* Full name: `\Zend\Filter\Int`
* Parent class: [`\Zend\Filter\ToInt`](./ToInt.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.




## Methods


### __construct



```php
public __construct(): mixed
```











***


## Inherited methods


### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): int|mixed
```

Returns (int) $value

If the value provided is non-scalar, the value will remain unfiltered






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




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
