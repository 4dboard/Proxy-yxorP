***

# ApplyTokenParser

Applies filters on a section of a template.

{% apply upper %}
   This text becomes uppercase
{% endapply %}

* Full name: `\Twig\TokenParser\ApplyTokenParser`
* Parent class: [`\Twig\TokenParser\AbstractTokenParser`](./AbstractTokenParser.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




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

### decideApplyEnd



```php
public decideApplyEnd(\Twig\Token $token): mixed
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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
