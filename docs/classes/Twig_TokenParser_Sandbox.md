***

# Twig_TokenParser_Sandbox

Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.

{% sandbox %} {% include 'user.html' %} {% endsandbox %}

* Full name: `\Twig_TokenParser_Sandbox`
* Parent class: [`\Twig\TokenParser\SandboxTokenParser`](./Twig/TokenParser/SandboxTokenParser.md)

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
