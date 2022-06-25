***

# ObjectConstructorTest





* Full name: `\JMS\Serializer\Tests\Serializer\Doctrine\ObjectConstructorTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../../PHPUnit_Framework_TestCase.md)



## Properties


### registry



```php
private \Doctrine\Common\Persistence\ManagerRegistry $registry
```






***

### serializer



```php
private \JMS\Serializer\Serializer $serializer
```






***

### visitor



```php
private \JMS\Serializer\VisitorInterface $visitor
```






***

### context



```php
private \JMS\Serializer\DeserializationContext $context
```






***

## Methods


### testFindEntity



```php
public testFindEntity(): mixed
```











***

### testFindManagedEntity



```php
public testFindManagedEntity(): mixed
```











***

### testMissingAuthor



```php
public testMissingAuthor(): mixed
```











***

### testMissingAuthorFallback



```php
public testMissingAuthorFallback(): mixed
```











***

### testMissingNotManaged



```php
public testMissingNotManaged(): mixed
```











***

### testReference



```php
public testReference(): mixed
```











***

### testMissingAuthorException



```php
public testMissingAuthorException(): mixed
```











***

### testInvalidArg



```php
public testInvalidArg(): mixed
```











***

### testMissingData



```php
public testMissingData(): mixed
```











***

### setUp



```php
protected setUp(): mixed
```











***

### prepareDatabase



```php
private prepareDatabase(): mixed
```











***

### createConnection



```php
private createConnection(): mixed
```











***

### createEntityManager



```php
private createEntityManager(\Doctrine\DBAL\Connection $con): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$con` | **\Doctrine\DBAL\Connection** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
