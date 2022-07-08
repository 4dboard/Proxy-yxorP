***

# CurlHandler





* Full name: `\yxorP\proxy\Handler\CurlHandler`



## Properties


### factory



```php
private mixed $factory
```






***

## Methods


### __construct



```php
public __construct(array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### __invoke



```php
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
