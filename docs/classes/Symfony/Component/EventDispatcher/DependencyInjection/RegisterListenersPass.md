***

# RegisterListenersPass

Compiler pass to register tagged services for an event dispatcher.



* Full name: `\Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass`
* This class implements:
[`\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface`](../../DependencyInjection/Compiler/CompilerPassInterface.md)



## Properties


### dispatcherService



```php
protected $dispatcherService
```






***

### listenerTag



```php
protected $listenerTag
```






***

### subscriberTag



```php
protected $subscriberTag
```






***

## Methods


### __construct



```php
public __construct(string $dispatcherService = &#039;event_dispatcher&#039;, string $listenerTag = &#039;kernel.event_listener&#039;, string $subscriberTag = &#039;kernel.event_subscriber&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcherService` | **string** | Service name of the event dispatcher in processed container |
| `$listenerTag` | **string** | Tag name used for listener |
| `$subscriberTag` | **string** | Tag name used for subscribers |




***

### process



```php
public process(\Symfony\Component\DependencyInjection\ContainerBuilder $container): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Symfony\Component\DependencyInjection\ContainerBuilder** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
