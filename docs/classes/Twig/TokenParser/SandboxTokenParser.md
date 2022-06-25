***

# SandboxTokenParser

Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.

{% sandbox %}
    {% include 'user.html' %}
{% endsandbox %}

* Full name: `\Twig\TokenParser\SandboxTokenParser`
* Parent class: [`\Twig\TokenParser\AbstractTokenParser`](./AbstractTokenParser.md)

**See Also:**

* https://twig.symfony.com/doc/api.html#sandbox-extension - for details




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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
