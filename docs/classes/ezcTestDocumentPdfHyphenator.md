***

# ezcTestDocumentPdfHyphenator

Default hyphenation implementation, which does no word splitting at all.

* Full name: `\ezcTestDocumentPdfHyphenator`
* Parent class: [`\ezcDocumentPdfHyphenator`](./ezcDocumentPdfHyphenator.md)

## Methods

### splitWord

Split word into hypens

```php
public splitWord(mixed $word): void
```

Takes a word as a string and should return an array containing arrays of two words, which each represent a possible
split of a word. The german word "Zuckerstück" for example changes its hyphens depending on the splitting point, so the
return value would look like:

<code>
 array(
     array( 'Zuk-', 'kerstück' ),
     array( 'Zucker-', 'stück' ),
 )
</code>

You should always also include the concatenation character in the split words, since it might change depending on the
used language.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **mixed** |  |

***

## Inherited methods

### splitWord

Split word into hypens

```php
public splitWord(mixed $word): void
```

Takes a word as a string and should return an array containing arrays of two words, which each represent a possible
split of a word. The german word "Zuckerstück" for example changes its hyphens depending on the splitting point, so the
return value would look like:

<code>
 array(
     array( 'Zuk-', 'kerstück' ),
     array( 'Zucker-', 'stück' ),
 )
</code>

You should always also include the concatenation character in the split words, since it might change depending on the
used language.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **mixed** |  |

yxorP::get('REQUEST')
