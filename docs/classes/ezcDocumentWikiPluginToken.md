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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
