***

# ReflectionAbstract

Provides basic event logging and dispatching for every reflection class.



* Full name: `\phpDocumentor\Reflection\ReflectionAbstract`
* This class is an **Abstract class**

**See Also:**

* http://phpdoc.org - 



## Properties


### context

The context (namespace, aliases) for the reflection.

```php
protected \phpDocumentor\Reflection\DocBlock\Context $context
```






***

## Methods


### log

Dispatches a logging request.

```php
public log(string $message, int $priority = 6): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **int** | The logging priority, the lower,<br />the more important. Ranges from 1 to 7 |




***

### debug

Dispatches a logging request to log a debug message.

```php
public debug(string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
