***

# cache





* Full name: `\yxorP\app\lib\http\cache`




## Methods


### get



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



```php
private static gen(?string $key): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **?string** |  |




***

### fetch



```php
public static fetch(?string $key = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **?string** |  |




***

### set



```php
public static set(mixed $mime, mixed $content, ?string $key = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mime` | **mixed** |  |
| `$content` | **mixed** |  |
| `$key` | **?string** |  |




***

### store



```php
public static store(mixed $val, ?string $key = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$val` | **mixed** |  |
| `$key` | **?string** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
