***

# handlerStack





* Full name: `\yxorP\lib\proxy\handlerStack`



## Properties


### handler



```php
private $handler
```






***

### stack



```php
private $stack
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
public static create(callable $handler = null): mixed
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
public __invoke(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
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
public hasHandler(): mixed
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

### debugCallable



```php
private debugCallable(mixed $fn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **mixed** |  |




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
private findByName(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***

