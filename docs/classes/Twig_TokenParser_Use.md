***

# Twig_TokenParser_Use

Imports blocks defined in another template into the current template.

{% extends "base.html" %}

{% use "blocks.html" %}

{% block title %}{% endblock %} {% block content %}{% endblock %}

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

yxorP::get('REQUEST')
