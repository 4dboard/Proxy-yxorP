***

# MockListener





* Full name: `\JMS\Serializer\Tests\Serializer\EventDispatcher\MockListener`



## Properties


### expected



```php
private $expected
```






***

### actual



```php
private $actual
```






***

### wasReplayed



```php
private $wasReplayed
```






***

## Methods


### __call



```php
public __call(mixed $method, array $args = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **array** |  |




***

### _replay



```php
public _replay(): mixed
```











***

### _verify



```php
public _verify(mixed $message = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
