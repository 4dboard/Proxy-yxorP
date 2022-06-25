***

# UseTokenParser

Imports blocks defined in another template into the current template.

{% extends "base.html" %}

{% use "blocks.html" %}

{% block title %}{% endblock %} {% block content %}{% endblock %}

* Full name: `\Twig\TokenParser\UseTokenParser`
* Parent class: [`\Twig\TokenParser\AbstractTokenParser`](./AbstractTokenParser.md)

**See Also:**

* https://twig.symfony.com/doc/templates.html#horizontal-reuse - for details.

## Methods

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

## Inherited methods

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
