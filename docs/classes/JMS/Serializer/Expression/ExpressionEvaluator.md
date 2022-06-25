***

# ExpressionEvaluator





* Full name: `\JMS\Serializer\Expression\ExpressionEvaluator`
* This class implements:
[`\JMS\Serializer\Expression\ExpressionEvaluatorInterface`](./ExpressionEvaluatorInterface.md)



## Properties


### expressionLanguage



```php
private \Symfony\Component\ExpressionLanguage\ExpressionLanguage $expressionLanguage
```






***

### context



```php
private array $context
```






***

### cache



```php
private array $cache
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\ExpressionLanguage\ExpressionLanguage $expressionLanguage, array $context = array(), array $cache = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expressionLanguage` | **\Symfony\Component\ExpressionLanguage\ExpressionLanguage** |  |
| `$context` | **array** |  |
| `$cache` | **array** |  |




***

### setContextVariable



```php
public setContextVariable(string $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |




***

### evaluate



```php
public evaluate(string $expression, array $data = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **string** |  |
| `$data` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
