***

# Logging

Configuration definition for the logger.



* Full name: `\phpDocumentor\Configuration\Logging`



## Properties


### level



```php
protected string $level
```






***

### paths



```php
protected string[] $paths
```






***

## Methods


### getLevel

Returns the minimum output level for logging.

```php
public getLevel(): string
```











***

### setLevel

Sets the minimum output level for the logger.

```php
public setLevel(string $level): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **string** |  |




***

### getPaths

Returns the paths that determine where to store log files.

```php
public getPaths(): string[]
```

phpDocumentor uses two types of log files to be able to sift through the logs more easily:

- 'default', contains all logs as mentioned in the logging level in this object and
- 'debug', contains debugging information that is exposed when debugging is enabled.









***

### setPaths

Registers the paths that determine where to store log files.

```php
public setPaths(\string[] $paths): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **\string[]** |  |



**See Also:**

* \phpDocumentor\Configuration\getPaths() - for more information.

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
