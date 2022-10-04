***

# CurlMultiHandler





* Full name: `\yxorP\proxy\Handler\CurlMultiHandler`



## Properties


### factory



```php
private mixed $factory
```






***

### selectTimeout



```php
private mixed $selectTimeout
```






***

### active



```php
private $active
```






***

### handles



```php
private array $handles
```






***

### delays



```php
private array $delays
```






***

### options



```php
private mixed $options
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
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Apromise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### cancel



```php
private cancel(mixed $id): bool
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
private timeToNext(): float|int
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

