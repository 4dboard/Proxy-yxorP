***

# ForTokenParser

Loops over each item of a sequence.

<ul>
 {% for user in users %}
   <li>{{ user.username|e }}</li>
 {% endfor %}
</ul>

* Full name: `\Twig\TokenParser\ForTokenParser`
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

### decideForFork



```php
public decideForFork(\Twig\Token $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\Twig\Token** |  |




***

### decideForEnd



```php
public decideForEnd(\Twig\Token $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\Twig\Token** |  |




***

### checkLoopUsageCondition



```php
protected checkLoopUsageCondition(\Twig\TokenStream $stream, \Twig_NodeInterface $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Twig\TokenStream** |  |
| `$node` | **\Twig_NodeInterface** |  |




***

### checkLoopUsageBody



```php
protected checkLoopUsageBody(\Twig\TokenStream $stream, \Twig_NodeInterface $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Twig\TokenStream** |  |
| `$node` | **\Twig_NodeInterface** |  |




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
