***

# Pool





* Full name: `\yxorP\lib\proxy\Pool`
* This class implements:
[`\yxorP\lib\proxy\Promise\PromisorInterface`](./Promise/PromisorInterface.md)



## Properties


### each



```php
private $each
```






***

## Methods


### __construct



```php
public __construct(\yxorP\lib\proxy\ClientInterface $client, mixed $requests, array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\lib\proxy\ClientInterface** |  |
| `$requests` | **mixed** |  |
| `$config` | **array** |  |




***

### batch



```php
public static batch(\yxorP\lib\proxy\ClientInterface $client, mixed $requests, array $options = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\lib\proxy\ClientInterface** |  |
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
public promise(): mixed
```











***


***

