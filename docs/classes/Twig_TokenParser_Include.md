***

# Twig_TokenParser_Include

Includes a template.

{% include 'header.html' %}
  Body
{% include 'footer.html' %}

* Full name: `\Twig_TokenParser_Include`
* Parent class: [`\Twig\TokenParser\IncludeTokenParser`](./Twig/TokenParser/IncludeTokenParser.md)






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

### parseArguments



```php
protected parseArguments(): mixed
```











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
