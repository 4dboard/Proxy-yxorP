***

# FilterTokenParser

Filters a section of a template by applying filters.

{% filter upper %} This text becomes uppercase {% endfilter %}

* Full name: `\Twig\TokenParser\FilterTokenParser`
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
