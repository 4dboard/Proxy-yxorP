***

# ArrayCollectionHandler





* Full name: `\JMS\Serializer\Handler\ArrayCollectionHandler`
* This class implements:
[`\JMS\Serializer\Handler\SubscribingHandlerInterface`](./SubscribingHandlerInterface.md)



## Properties


### initializeExcluded



```php
private bool $initializeExcluded
```






***

## Methods


### __construct



```php
public __construct(mixed $initializeExcluded = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initializeExcluded` | **mixed** |  |




***

### getSubscribingMethods

Return format:

```php
public static getSubscribingMethods(): array
```

array(
         array(
             'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
             'format' => 'json',
             'type' => 'DateTime',
             'method' => 'serializeDateTimeToJson',
         ),
     )

The direction and method keys can be omitted.

* This method is **static**.







***

### serializeCollection



```php
public serializeCollection(\JMS\Serializer\VisitorInterface $visitor, \Doctrine\Common\Collections\Collection $collection, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$collection` | **\Doctrine\Common\Collections\Collection** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### deserializeCollection



```php
public deserializeCollection(\JMS\Serializer\VisitorInterface $visitor, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
