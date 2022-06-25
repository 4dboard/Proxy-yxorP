***

# GroupSequenceProviderEntity





* Full name: `\Symfony\Component\Validator\Tests\Fixtures\GroupSequenceProviderEntity`
* This class implements:
[`\Symfony\Component\Validator\GroupSequenceProviderInterface`](../../GroupSequenceProviderInterface.md)



## Properties


### firstName



```php
public $firstName
```






***

### lastName



```php
public $lastName
```






***

### sequence



```php
protected $sequence
```






***

## Methods


### __construct



```php
public __construct(mixed $sequence): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sequence` | **mixed** |  |




***

### getGroupSequence

Returns which validation groups should be used for a certain state
of the object.

```php
public getGroupSequence(): string[]|\Symfony\Component\Validator\Constraints\GroupSequence
```









**Return Value:**

An array of validation groups



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
