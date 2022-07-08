***

# HandlerStack





* Full name: `\yxorP\proxy\HandlerStack`



## Properties


### handler



```php
private $handler
```






***

### stack



```php
private array $stack
```






***

### cached



```php
private $cached
```






***

## Methods


### __construct



```php
public __construct(callable $handler = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### create



```php
public static create(callable $handler = null): \yxorP\proxy\HandlerStack
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### push



```php
public push(callable $middleware, mixed $name = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$middleware` | **callable** |  |
| `$name` | **mixed** |  |




***

### __invoke



```php
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### resolve



```php
public resolve(): mixed
```











***

### __toString



```php
public __toString(): mixed
```











***

### debugCallable



```php
private debugCallable(mixed $fn): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **mixed** |  |




***

### setHandler



```php
public setHandler(callable $handler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### hasHandler



```php
public hasHandler(): bool
```











***

### unshift



```php
public unshift(callable $middleware, mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$middleware` | **callable** |  |
| `$name` | **mixed** |  |




***

### before



```php
public before(mixed $findName, callable $middleware, mixed $withName = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **mixed** |  |
| `$middleware` | **callable** |  |
| `$withName` | **mixed** |  |




***

### splice



```php
private splice(mixed $findName, mixed $withName, callable $middleware, mixed $before): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **mixed** |  |
| `$withName` | **mixed** |  |
| `$middleware` | **callable** |  |
| `$before` | **mixed** |  |




***

### findByName



```php
private findByName(mixed $name): int|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### after



```php
public after(mixed $findName, callable $middleware, mixed $withName = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **mixed** |  |
| `$middleware` | **callable** |  |
| `$withName` | **mixed** |  |




***

### remove



```php
public remove(mixed $remove): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$remove` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
