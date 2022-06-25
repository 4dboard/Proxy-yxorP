***

# Twig_TokenParser_Macro

Defines a macro.

{% macro input(name, value, type, size) %}
<input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
{% endmacro %}

* Full name: `\Twig_TokenParser_Macro`
* Parent class: [`\Twig\TokenParser\MacroTokenParser`](./Twig/TokenParser/MacroTokenParser.md)

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

### decideBlockEnd

```php
public decideBlockEnd(\Twig\Token $token): mixed
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
