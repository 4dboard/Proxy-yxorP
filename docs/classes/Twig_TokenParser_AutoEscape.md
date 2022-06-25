***

# Twig_TokenParser_AutoEscape

Marks a section of a template to be escaped or not.

{% autoescape true %}
  Everything will be automatically escaped in this block
{% endautoescape %}

{% autoescape false %}
  Everything will be outputed as is in this block
{% endautoescape %}

{% autoescape true js %}
  Everything will be automatically escaped in this block
  using the js escaping strategy
{% endautoescape %}

* Full name: `\Twig_TokenParser_AutoEscape`
* Parent class: [`\Twig\TokenParser\AutoEscapeTokenParser`](./Twig/TokenParser/AutoEscapeTokenParser.md)






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
