***

# Twig_TokenParser_If

Tests a condition.

{% if users %}
 <ul>
   {% for user in users %}
     <li>{{ user.username|e }}</li>
   {% endfor %}
 </ul>
{% endif %}

* Full name: `\Twig_TokenParser_If`
* Parent class: [`\Twig\TokenParser\IfTokenParser`](./Twig/TokenParser/IfTokenParser.md)

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

### decideIfFork

```php
public decideIfFork(\Twig\Token $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\Twig\Token** |  |

***

### decideIfEnd

```php
public decideIfEnd(\Twig\Token $token): mixed
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
