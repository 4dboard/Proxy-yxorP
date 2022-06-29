***

# ezcDocumentWikiPluginToken

Struct for Wiki plugin token.

The most complex token, just contains the full plugin contents. May be post process by the tokenizer to extract its
type, parameters and text values. Otherwise it will be ignored, and not handled properly by the parser.

* Full name: `\ezcDocumentWikiPluginToken`
* Parent class: [`\ezcDocumentWikiBlockMarkupToken`](./ezcDocumentWikiBlockMarkupToken.md)

## Properties

### type

Plugin type / name.

```php
public string $type
```

***

### parameters

Plugin parameters

```php
public array $parameters
```

***

### text

Plugin content

```php
public string $text
```

***



***

