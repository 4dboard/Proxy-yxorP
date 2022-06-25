***

# Twig_TokenParser_Set

Defines a variable.

{% set foo = 'foo' %}
{% set foo = [1, 2] %}
{% set foo = {'foo': 'bar'} %}
{% set foo = 'foo' ~ 'bar' %}
{% set foo, bar = 'foo', 'bar' %}
{% set foo %}Some content{% endset %}

* Full name: `\Twig_TokenParser_Set`
* Parent class: [`\Twig\TokenParser\SetTokenParser`](./Twig/TokenParser/SetTokenParser.md)






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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
