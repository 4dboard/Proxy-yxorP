***

# cache

A class that is used to cache data.



* Full name: `\yxorP\app\lib\http\cache`




## Methods


### get

Checking if the cache file is valid and if it is, it is including the cache file.

```php
public static get(?string $key = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **?string** |  |




***

### isValid

Used to check if the cache file exists.

```php
public static isValid(?string $key = null): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **?string** |  |




***

### gen

A PHPDoc annotation that is used to tell the IDE that the function returns an array with the keys `key` and `path`.

```php
private static gen(?string $key): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **?string** |  |




***

### set

It's writing the content to the cache file.

```php
public static set(mixed $content, ?string $key = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$key` | **?string** |  |




***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
