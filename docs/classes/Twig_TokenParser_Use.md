***

# Twig_TokenParser_Use

Imports blocks defined in another template into the current template.

{% extends "base.html" %}

{% use "blocks.html" %}

{% block title %}{% endblock %}
{% block content %}{% endblock %}

* Full name: `\Twig_TokenParser_Use`
* Parent class: [`\Twig\TokenParser\UseTokenParser`](./Twig/TokenParser/UseTokenParser.md)






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
