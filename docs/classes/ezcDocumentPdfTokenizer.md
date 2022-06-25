***

# ezcDocumentPdfTokenizer

Abstract base class for tokenizer implementations.

Tokenizers are used to split a series of words (sentences) into single
words, which can be rendered split by spaces.

* Full name: `\ezcDocumentPdfTokenizer`
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SPACE`|public| |0|
|`WRAP`|public| |1|
|`FORCED`|public| |2|


## Methods


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
