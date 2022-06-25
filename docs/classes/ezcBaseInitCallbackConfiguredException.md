***

# ezcBaseInitCallbackConfiguredException

ezcBaseInitCallbackConfiguredException is thrown when you try to assign a
callback clasname to an identifier, while there is already a callback class
configured for this identifier.



* Full name: `\ezcBaseInitCallbackConfiguredException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)




## Methods


### __construct

Constructs a new ezcBaseInitCallbackConfiguredException.

```php
public __construct(string $identifier, string $originalCallbackClassName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |
| `$originalCallbackClassName` | **string** |  |




***


## Inherited methods


### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
