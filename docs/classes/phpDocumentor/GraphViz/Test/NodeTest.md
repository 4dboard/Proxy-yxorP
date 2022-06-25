***

# NodeTest

Test for the the class representing a GraphViz node.

* Full name: `\phpDocumentor\GraphViz\Test\NodeTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)

**See Also:**

* http://phpDocumentor-project.org -

## Properties

### fixture

```php
protected \phpDocumentor\GraphViz\Node $fixture
```

***

## Methods

### setUp

Initializes the fixture for this test.

```php
protected setUp(): void
```

***

### testConstruct

Tests the construct method

```php
public testConstruct(): mixed
```

***

### testCreate

Tests the create method

```php
public testCreate(): mixed
```

***

### testName

Tests the getting and setting of the name.

```php
public testName(): void
```

***

### testCall

Tests the magic __call method, to work as described, return the object instance for a setX method, return the value for
an getX method, and null for the remaining method calls

```php
public testCall(): void
```

***

### testToString

Tests whether the magic __toString method returns a well formatted string as specified in the DOT standard

```php
public testToString(): void
```

***

### testToStringWithLabelContainingSlashes

Tests whether the magic __toString method returns a well formatted string as specified in the DOT standard when the
label contains slashes.

```php
public testToStringWithLabelContainingSlashes(): mixed
```

yxorP::get('REQUEST')
