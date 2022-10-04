***

# CurlMultiHandler





* Full name: `\yxorP\lib\proxy\Handler\CurlMultiHandler`



## Properties


### factory



```php
private $factory
```






***

### selectTimeout



```php
private $selectTimeout
```






***

### active



```php
private $active
```






***

### handles



```php
private $handles
```






***

### delays



```php
private $delays
```






***

### options



```php
private $options
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

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __destruct



```php
public __destruct(): mixed
```











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

### cancel



```php
private cancel(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### addRequest



```php
private addRequest(array $entry): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entry` | **array** |  |




***

### execute



```php
public execute(): mixed
```











***

### timeToNext



```php
private timeToNext(): mixed
```











***

### tick



```php
public tick(): mixed
```











***

### processMessages



```php
private processMessages(): mixed
```











***


***

