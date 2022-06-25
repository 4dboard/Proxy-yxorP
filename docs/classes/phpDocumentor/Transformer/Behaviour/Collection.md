***

# Collection

Collection object for a set of Behaviours.



* Full name: `\phpDocumentor\Transformer\Behaviour\Collection`
* Parent class: [`\phpDocumentor\Transformer\Behaviour\BehaviourAbstract`](./BehaviourAbstract.md)
* This class implements:
[`\Countable`](../../../Countable.md)



## Properties


### behaviours



```php
protected \phpDocumentor\Transformer\Behaviour\BehaviourAbstract[] $behaviours
```






***

## Methods


### __construct

Initializes the list of Behaviours to execute each request.

```php
public __construct(\phpDocumentor\Transformer\Behaviour\BehaviourAbstract[] $behaviours = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$behaviours` | **\phpDocumentor\Transformer\Behaviour\BehaviourAbstract[]** | List of behaviours to process. |




***

### addBehaviour

Adds a behaviour to a collection

```php
public addBehaviour(\phpDocumentor\Transformer\Behaviour\BehaviourAbstract $behaviour): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$behaviour` | **\phpDocumentor\Transformer\Behaviour\BehaviourAbstract** | Behaviour to add to the collection. |




***

### removeBehaviour

Removes a behaviour from the collection

```php
public removeBehaviour(\phpDocumentor\Transformer\Behaviour\BehaviourAbstract $behaviour): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$behaviour` | **\phpDocumentor\Transformer\Behaviour\BehaviourAbstract** | Behaviour to remove from the collection. |




***

### process

Executes the behaviour on the given object model,

```php
public process(\phpDocumentor\Descriptor\ProjectDescriptor $project): \phpDocumentor\Descriptor\ProjectDescriptor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### count

Count the number of behaviours in this collection.

```php
public count(): int
```











***


## Inherited methods


### process

Executes the behaviour on the given dataset,

```php
public process(\phpDocumentor\Descriptor\ProjectDescriptor $project): \phpDocumentor\Descriptor\ProjectDescriptor
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | document containing the source structure. |




***

### setTransformer

Sets the transformer used for this behaviour.

```php
public setTransformer(\phpDocumentor\Transformer\Transformer $transformer): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformer` | **\phpDocumentor\Transformer\Transformer** | Transformer responsible for output. |




***

### getTransformer

Returns the transformer that hosts this behaviour.

```php
public getTransformer(): \phpDocumentor\Transformer\Transformer
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
