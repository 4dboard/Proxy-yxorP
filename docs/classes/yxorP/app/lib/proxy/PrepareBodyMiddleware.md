***

# prepareBodyMiddleware





* Full name: `\yxorP\app\lib\proxy\prepareBodyMiddleware`



## Properties


### nextHandler



```php
private $nextHandler
```






***

## Methods


### __construct



```php
public __construct(callable $nextHandler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nextHandler` | **callable** |  |




***

### __invoke



```php
public __invoke(\yxorP\app\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### addExpectHeader



```php
private addExpectHeader(\yxorP\app\lib\psr\http\message\requestInterface $request, array $options, array& $modify): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |
| `$modify` | **array** |  |




***


***

