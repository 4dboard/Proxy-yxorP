***

# ErrorTypes





* Full name: `\yxorP\snag\ErrorTypes`



## Properties


### ERROR_TYPES



```php
private static array $ERROR_TYPES
```



* This property is **static**.


***

## Methods


### isFatal



```php
public static isFatal(mixed $code): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### getSeverity



```php
public static getSeverity(mixed $code): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### getName



```php
public static getName(mixed $code): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### getLevelsForSeverity



```php
public static getLevelsForSeverity(mixed $severity): int|string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$severity` | **mixed** |  |




***

### getAllCodes



```php
public static getAllCodes(): array
```



* This method is **static**.







***

### codeToString



```php
public static codeToString(mixed $code): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
