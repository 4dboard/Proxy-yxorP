***

# ErrorLevelActivationStrategy

Error level based activation strategy.



* Full name: `\Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy`
* This class implements:
[`\Monolog\Handler\FingersCrossed\ActivationStrategyInterface`](./ActivationStrategyInterface.md)



## Properties


### actionLevel



```php
private $actionLevel
```






***

## Methods


### __construct



```php
public __construct(mixed $actionLevel): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actionLevel` | **mixed** |  |




***

### isHandlerActivated

Returns whether the given record activates the handler.

```php
public isHandlerActivated(array $record): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
