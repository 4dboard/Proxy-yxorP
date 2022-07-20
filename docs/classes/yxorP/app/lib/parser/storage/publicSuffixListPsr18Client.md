***

# publicSuffixListPsr18Client





* Full name: `\yxorP\app\lib\parser\storage\publicSuffixListPsr18Client`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\storage\publicSuffixListClientInterface`](./publicSuffixListClientInterface.md)
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
public get(string $uri): \yxorP\app\lib\parser\publicSuffixListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
