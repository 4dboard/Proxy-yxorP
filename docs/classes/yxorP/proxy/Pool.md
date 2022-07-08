***

# Pool





* Full name: `\yxorP\proxy\Pool`
* This class implements:
[`\yxorP\proxy\Apromise\PromisorInterface`](./Apromise/PromisorInterface.md)



## Properties


### each



```php
private \yxorP\proxy\Apromise\EachPromise $each
```






***

## Methods


### __construct



```php
public __construct(\yxorP\proxy\ClientInterface $client, mixed $requests, array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\proxy\ClientInterface** |  |
| `$requests` | **mixed** |  |
| `$config` | **array** |  |




***

### batch



```php
public static batch(\yxorP\proxy\ClientInterface $client, mixed $requests, array $options = []): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\proxy\ClientInterface** |  |
| `$requests` | **mixed** |  |
| `$options` | **array** |  |




***

### cmpCallback



```php
private static cmpCallback(array& $options, mixed $name, array& $results): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$name` | **mixed** |  |
| `$results` | **array** |  |




***

### promise



```php
public promise(): \yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
