***

# Twig_TokenParser_Filter

Filters a section of a template by applying filters.

{% filter upper %}
   This text becomes uppercase
{% endfilter %}

* Full name: `\Twig_TokenParser_Filter`
* Parent class: [`\Twig\TokenParser\FilterTokenParser`](./Twig/TokenParser/FilterTokenParser.md)






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
