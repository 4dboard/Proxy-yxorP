***

# Twig_TokenParser_Deprecated

Deprecates a section of a template.

{% deprecated 'The "base.twig" template is deprecated, use "layout.twig" instead.' %}
{% extends 'layout.html.twig' %}

* Full name: `\Twig_TokenParser_Deprecated`
* Parent class: [`\Twig\TokenParser\DeprecatedTokenParser`](./Twig/TokenParser/DeprecatedTokenParser.md)






## Inherited methods


### parse



```php
public parse(\Twig\Token $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\Twig\Token** |  |




***

### getTag



```php
public getTag(): mixed
```











***

### setParser

Sets the parser associated with this token parser.

```php
public setParser(\Twig\Parser $parser): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig\Parser** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
