***

# HydratorListener

Aggregate listener wrapping around a hydrator. Listens
to {@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_HYDRATE} and
{@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_EXTRACT}



* Full name: `\Zend\Stdlib\Hydrator\Aggregate\HydratorListener`
* Parent class: [`\Zend\Hydrator\Aggregate\HydratorListener`](../../../Hydrator/Aggregate/HydratorListener.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.






## Inherited methods


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
