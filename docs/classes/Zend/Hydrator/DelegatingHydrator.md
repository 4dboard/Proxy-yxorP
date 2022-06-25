***

# DelegatingHydrator





* Full name: `\Zend\Hydrator\DelegatingHydrator`
* This class implements:
[`\Zend\Hydrator\HydratorInterface`](./HydratorInterface.md)



## Properties


### hydrators



```php
protected \Zend\ServiceManager\ServiceLocatorInterface $hydrators
```






***

## Methods


### __construct

Constructor

```php
public __construct(\Zend\ServiceManager\ServiceLocatorInterface $hydrators): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrators` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




***

### hydrate

{@inheritdoc}

```php
public hydrate(array $data, mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$object` | **mixed** |  |




***

### extract

{@inheritdoc}

```php
public extract(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### getHydrator

Gets hydrator of an object

```php
protected getHydrator(object $object): \Zend\Hydrator\HydratorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
