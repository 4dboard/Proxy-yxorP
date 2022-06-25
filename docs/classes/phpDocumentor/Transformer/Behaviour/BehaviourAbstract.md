***

# BehaviourAbstract

Collection object for a set of Behaviours.



* Full name: `\phpDocumentor\Transformer\Behaviour\BehaviourAbstract`
* This class is an **Abstract class**



## Properties


### transformer



```php
protected \phpDocumentor\Transformer\Transformer $transformer
```






***

## Methods


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
