***

# Twig_TokenParser_Spaceless

Remove whitespaces between HTML tags.

{% spaceless %}
   <div>
       <strong>foo</strong>
   </div>
{% endspaceless %}
{# output will be <div><strong>foo</strong></div> #}

* Full name: `\Twig_TokenParser_Spaceless`
* Parent class: [`\Twig\TokenParser\SpacelessTokenParser`](./Twig/TokenParser/SpacelessTokenParser.md)






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

### decideSpacelessEnd



```php
public decideSpacelessEnd(\Twig\Token $token): mixed
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
