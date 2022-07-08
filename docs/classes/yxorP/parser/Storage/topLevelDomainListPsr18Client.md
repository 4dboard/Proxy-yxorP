***

# topLevelDomainListPsr18Client





* Full name: `\yxorP\parser\Storage\topLevelDomainListPsr18Client`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\Storage\topLevelDomainListClientInterface`](./topLevelDomainListClientInterface.md)
* This class is a **Final class**



## Properties


### client



```php
private \yxorP\psr\Http\Client\ClientInterface $client
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
public __construct(\yxorP\psr\Http\Client\ClientInterface $client, \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\psr\Http\Client\ClientInterface** |  |
| `$requestFactory` | **\yxorP\psr\Http\Message\RequestFactoryInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\parser\topInterfaceLevelDomainListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
