***

# ezcDocumentPdfHyphenator

Abstract base class for hyphenation implementations.

Hyphenation implementations are responsbile for language dependant splitting
of words into hyphens, for better text wrapping especially in justified
paragraphs.

A proper hyphenation implementation should most probably be based on
dicstionary files, provided by external tools.

* Full name: `\ezcDocumentPdfHyphenator`
* This class is an **Abstract class**




## Methods


### splitWord

Split word into hypens

```php
public splitWord(mixed $word): void
```

Takes a word as a string and should return an array containing arrays of
two words, which each represent a possible split of a word. The german
word "Zuckerstück" for example changes its hyphens depending on the
splitting point, so the return value would look like:

<code>
 array(
     array( 'Zuk-', 'kerstück' ),
     array( 'Zucker-', 'stück' ),
 )
</code>

You should always also include the concatenation character in the split
words, since it might change depending on the used language.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
