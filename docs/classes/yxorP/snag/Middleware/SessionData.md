***

# SessionData





* Full name: `\yxorP\snag\Middleware\SessionData`



## Properties


### client



```php
private \yxorP\snag\Client $client
```






***

### sessionTracker



```php
private \yxorP\snag\SessionTracker $sessionTracker
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Client $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\snag\Client** |  |




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
