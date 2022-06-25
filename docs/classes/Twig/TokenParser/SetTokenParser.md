***

# SetTokenParser

Defines a variable.

{% set foo = 'foo' %} {% set foo = [1, 2] %} {% set foo = {'foo': 'bar'} %} {% set foo = 'foo' ~ 'bar' %} {% set foo,
bar = 'foo', 'bar' %} {% set foo %}Some content{% endset %}

* Full name: `\Twig\TokenParser\SetTokenParser`
* Parent class: [`\Twig\TokenParser\AbstractTokenParser`](./AbstractTokenParser.md)

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
