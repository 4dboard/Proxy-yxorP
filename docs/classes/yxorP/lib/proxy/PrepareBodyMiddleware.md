***

# PrepareBodyMiddleware





* Full name: `\yxorP\lib\proxy\PrepareBodyMiddleware`



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
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### addExpectHeader



```php
private addExpectHeader(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, array& $modify): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$modify` | **array** |  |




***


***

