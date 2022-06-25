***

# HydratingArrayIterator





* Full name: `\Zend\Stdlib\Hydrator\Iterator\HydratingArrayIterator`
* Parent class: [`\Zend\Hydrator\Iterator\HydratingArrayIterator`](../../../Hydrator/Iterator/HydratingArrayIterator.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\Iterator\HydratingIteratorInterface`](./HydratingIteratorInterface.md)






## Inherited methods


### __construct



```php
public __construct(\Zend\Hydrator\HydratorInterface $hydrator, \Iterator $data, string|object $prototype): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |
| `$data` | **\Iterator** |  |
| `$prototype` | **string&#124;object** | Object or class name to use for prototype. |




***

### setPrototype

This sets the prototype to hydrate.

```php
public setPrototype(mixed $prototype): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prototype` | **mixed** |  |




***

### setHydrator

Sets the hydrator to use during iteration.

```php
public setHydrator(\Zend\Hydrator\HydratorInterface $hydrator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |




***

### current



```php
public current(): object
```









**Return Value:**

Returns hydrated clone of $prototype



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
