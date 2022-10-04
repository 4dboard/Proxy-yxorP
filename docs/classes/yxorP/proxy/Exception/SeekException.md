***

# SeekException





* Full name: `\yxorP\proxy\Exception\SeekException`
* Parent class: [`RuntimeException`](../../../RuntimeException.md)
* This class implements:
[`\yxorP\proxy\Exception\ProxyException`](./ProxyException.md)



## Properties


### stream



```php
private \yxorP\psr\Http\Message\StreamInterface $stream
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\Http\Message\StreamInterface $stream, mixed $pos, mixed $msg = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$pos` | **mixed** |  |
| `$msg` | **mixed** |  |




***

### getStream



```php
public getStream(): \yxorP\psr\Http\Message\StreamInterface
```











***


***

