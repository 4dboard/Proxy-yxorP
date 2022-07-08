***

# publicSuffixListPsr18Client





* Full name: `\yxorP\parser\Storage\publicSuffixListPsr18Client`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\Storage\publicSuffixListClientInterface`](./publicSuffixListClientInterface.md)
* This class is a **Final class**



## Properties


### client



```php
private \yxorP\proxy\ClientInterface $client
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
public __construct(\yxorP\proxy\ClientInterface $client, \yxorP\psr\Http\Message\RequestFactoryInterface $requestFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\proxy\ClientInterface** |  |
| `$requestFactory` | **\yxorP\psr\Http\Message\RequestFactoryInterface** |  |




***

### get



```php
public get(string $uri): \yxorP\parser\publicSuffixListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
