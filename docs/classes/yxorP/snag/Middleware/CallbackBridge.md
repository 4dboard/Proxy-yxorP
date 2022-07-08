***

# CallbackBridge





* Full name: `\yxorP\snag\Middleware\CallbackBridge`



## Properties


### callback



```php
private $callback
```






***

## Methods


### __construct



```php
public __construct(callable $callback): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |




***

### __invoke



```php
public __invoke(\yxorP\snag\Report $report, callable $next): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$report` | **\yxorP\snag\Report** |  |
| `$next` | **callable** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
