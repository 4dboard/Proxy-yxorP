***

# HydratorListener

Aggregate listener wrapping around a hydrator.

Listens to {@see} and {@see}

* Full name: `\Zend\Hydrator\Aggregate\HydratorListener`
* Parent class: [`\Zend\EventManager\AbstractListenerAggregate`](../../EventManager/AbstractListenerAggregate.md)



## Properties


### hydrator



```php
protected \Zend\Hydrator\HydratorInterface $hydrator
```






***

## Methods


### __construct



```php
public __construct(\Zend\Hydrator\HydratorInterface $hydrator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |




***

### attach

{@inheritDoc}

```php
public attach(\Zend\EventManager\EventManagerInterface $events, mixed $priority = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |
| `$priority` | **mixed** |  |




***


## Inherited methods


### detach

Detach all previously attached listeners

```php
public detach(\Zend\EventManager\EventManagerInterface $events): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
