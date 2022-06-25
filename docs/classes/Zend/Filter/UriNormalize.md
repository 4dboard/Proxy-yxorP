***

# UriNormalize





* Full name: `\Zend\Filter\UriNormalize`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)



## Properties


### defaultScheme

The default scheme to use when parsing scheme-less URIs

```php
protected string $defaultScheme
```






***

### enforcedScheme

Enforced scheme for scheme-less URIs. See setEnforcedScheme docs for info

```php
protected string $enforcedScheme
```






***

## Methods


### __construct

Sets filter options

```php
public __construct(array|\Traversable|null $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |




***

### setDefaultScheme

Set the default scheme to use when parsing scheme-less URIs

```php
public setDefaultScheme(string $defaultScheme): self
```

The scheme used when parsing URIs may affect the specific object used to
normalize the URI and thus may affect the resulting normalize URI.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultScheme` | **string** |  |




***

### setEnforcedScheme

Set a URI scheme to enforce on schemeless URIs

```php
public setEnforcedScheme(string $enforcedScheme): self
```

This allows forcing input values such as 'www.example.com/foo' into
'http://www.example.com/foo'.

This should be used with caution, as a standard-compliant URI parser
would regard 'www.example.com' in the above input URI to be the path and
not host part of the URI. While this option can assist in solving
real-world user mishaps, it may yield unexpected results at times.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enforcedScheme` | **string** |  |




***

### filter

Filter the URL by normalizing it and applying a default scheme if set

```php
public filter(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### enforceScheme

Enforce the defined scheme on the URI

```php
protected enforceScheme(\Zend\Uri\Uri $uri): mixed
```

This will also adjust the host and path parts of the URI as expected in
the case of scheme-less network URIs






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Zend\Uri\Uri** |  |




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
