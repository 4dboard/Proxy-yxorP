***

# ezcDocumentPdfLiteralTokenizer

Tokenizer implementation for literal blocks, preserving whitespaces.



* Full name: `\ezcDocumentPdfLiteralTokenizer`
* Parent class: [`\ezcDocumentPdfTokenizer`](./ezcDocumentPdfTokenizer.md)




## Methods


### tokenize

Split string into words.

```php
public tokenize(string $string): array
```

This function takes a string and splits it into words. There are
different mechanisms which indicate possible splitting points in the
resulting word stream:

- self:SPACE: The renderer might render a space
- self:WRAP: The renderer might wrap the line at this position, but will
  not render spaces.

A possible splitting of an english sentence might look like:

<code>
 array(
     'Hello',
     self:SPACE,
     'world!',
 );
</code>

Non breaking spaces should not be splitted into multiple words, so there
will be no break applied.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### convertTabs

Convert tabs to spaces.

```php
protected convertTabs(string $string, int $tabwidth = 8, int $offset): string
```

Convert all tabs to spaces, using a 8 spaces for a tab.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$tabwidth` | **int** |  |
| `$offset` | **int** |  |




***


## Inherited methods


### tokenize

Split string into words

```php
public tokenize(string $string): array
```

This function takes a string and splits it into words. There are
different mechanisms which indicate possible splitting points in the
resulting word stream:

- self:SPACE: The renderer might render a space
- self:WRAP: The renderer might wrap the line at this position, but will
  not render spaces, might as well just be omitted.

A possible splitting of an english sentence might look like:

<code>
 array(
     'Hello',
     self:SPACE,
     'world!',
 );
</code>

Non breaking spaces should not be splitted into multiple words, so there
will be no break applied.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
