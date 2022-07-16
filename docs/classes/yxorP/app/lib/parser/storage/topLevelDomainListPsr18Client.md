***

# topLevelDomainListPsr18Client





* Full name: `\yxorP\app\lib\parser\storage\topLevelDomainListPsr18Client`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\storage\topLevelDomainListClientInterface`](./topLevelDomainListClientInterface.md)
* This class is a **Final class**



## Properties


### client



```php
private \GuzzleHttp\ClientInterface $client
```






***

### requestFactory



```php
private \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct



```php
public __construct(\GuzzleHttp\ClientInterface $client, \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\GuzzleHttp\ClientInterface** |  |
| `$requestFactory` | **\yxorP\psr\Http\Message\RequestFactoryInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\app\lib\parser\topLevelDomainListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***

