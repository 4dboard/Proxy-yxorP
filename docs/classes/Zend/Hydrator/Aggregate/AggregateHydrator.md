***

# AggregateHydrator

Aggregate hydrator that composes multiple hydrators via events



* Full name: `\Zend\Hydrator\Aggregate\AggregateHydrator`
* This class implements:
[`\Zend\Hydrator\HydratorInterface`](../HydratorInterface.md), [`\Zend\EventManager\EventManagerAwareInterface`](../../EventManager/EventManagerAwareInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_PRIORITY`|public| |1|

## Properties


### eventManager



```php
protected \Zend\EventManager\EventManagerInterface|null $eventManager
```






***

## Methods


### add

Attaches the provided hydrator to the list of hydrators to be used while hydrating/extracting data

```php
public add(\Zend\Hydrator\HydratorInterface $hydrator, int $priority = self::DEFAULT_PRIORITY): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |
| `$priority` | **int** |  |




***

### extract

{@inheritDoc}

```php
public extract(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### hydrate

{@inheritDoc}

```php
public hydrate(array $data, mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$object` | **mixed** |  |




***

### setEventManager

Inject an EventManager instance

```php
public setEventManager(\Zend\EventManager\EventManagerInterface $eventManager): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventManager` | **\Zend\EventManager\EventManagerInterface** |  |




***

### getEventManager

{@inheritDoc}

```php
public getEventManager(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
