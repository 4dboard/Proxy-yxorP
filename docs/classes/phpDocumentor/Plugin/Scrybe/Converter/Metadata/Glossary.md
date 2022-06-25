***

# Glossary

The glossary is a collection containing a collection of terms and uses that were discovered during the discovery
phase.

The key of this collection is the term that was discovered and the value is an array of locations where the term
was used.

The array of locations consists of a filename as key and an array with the linenumbers where the term occurred.

Example:

array(1) {
  ["term"]=>
  array(1) {
    ["filename"]=>
    array(3) {
      [0]=> int(10)
      [1]=> int(14)
      [2]=> int(20)
    }
  }
}

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\Glossary`
* Parent class: [`ArrayObject`](../../../../../ArrayObject.md)




## Methods


### addTerm

Adds a glossary term to the collection.

```php
public addTerm(string $term, string $filename, int $line_number): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$term` | **string** |  |
| `$filename` | **string** |  |
| `$line_number` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
