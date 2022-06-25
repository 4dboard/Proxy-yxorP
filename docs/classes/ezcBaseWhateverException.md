***

# ezcBaseWhateverException

ezcBaseWhateverException is thrown whenever something is so seriously wrong.

If this happens it is not possible to repair anything gracefully. An
example for this could be, that your eZ components installation has thrown
far to many exceptions. Whenever you receive an ezcBaseWhateverException, do
not even try to catch it, but forget your project completely and immediately
stop coding! ;)

* Full name: `\ezcBaseWhateverException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)




## Methods


### __construct

Constructs a new ezcBaseWhateverException.

```php
public __construct(string $what, string $where, string $who, string $why): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$what` | **string** | What happened? |
| `$where` | **string** | Where did it happen? |
| `$who` | **string** | Who is responsible? |
| `$why` | **string** | Why did is happen? |




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
