***

# ezcDocumentRstTokenizerException

Exception thrown, when the RST tokenizer could not tokenize a character
sequence.

This should never been thrown, but it is hard to prove that there is nothing
which is not matched by the regualr expressions above.

* Full name: `\ezcDocumentRstTokenizerException`
* Parent class: [`\ezcDocumentException`](./ezcDocumentException.md)




## Methods


### __construct

Construct exception from errnous string and current position

```php
public __construct(int $line, int $position, string $string): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** |  |
| `$position` | **int** |  |
| `$string` | **string** |  |




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
