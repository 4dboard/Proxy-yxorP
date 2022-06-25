***

# EdgeTest

Test for the the class representing a GraphViz edge (vertex).



* Full name: `\phpDocumentor\GraphViz\Test\EdgeTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)

**See Also:**

* http://phpDocumentor-project.org - 



## Properties


### fixture



```php
protected \phpDocumentor\GraphViz\Test\phpDocumentor\GraphViz\Edge $fixture
```






***

## Methods


### setUp

Sets up the fixture, for example, opens a network connection.

```php
protected setUp(): void
```

This method is called before a test is executed.









***

### tearDown

Tears down the fixture, for example, closes a network connection.

```php
protected tearDown(): void
```

This method is called after a test is executed.









***

### testConstruct

Tests the construct method

```php
public testConstruct(): void
```











***

### testCreate

Tests the create method

```php
public testCreate(): void
```











***

### testGetFrom

Tests whether the getFrom method returns the same node as passed
in the create method

```php
public testGetFrom(): void
```











***

### testGetTo

Tests the getTo method returns the same node as passed
in the create method

```php
public testGetTo(): void
```











***

### testCall

Tests the magic __call method, to work as described, return the object
instance for a setX method, return the value for an getX method, and null
for the remaining method calls

```php
public testCall(): void
```











***

### testToString

Tests whether the magic __toString method returns a well formatted string
as specified in the DOT standard

```php
public testToString(): void
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
