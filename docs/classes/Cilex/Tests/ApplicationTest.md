***

# ApplicationTest

Application test cases.



* Full name: `\Cilex\Tests\ApplicationTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../PHPUnit_Framework_TestCase.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NAME`|public| |&#039;Test&#039;|
|`VERSION`|public| |&#039;1.0.1&#039;|

## Properties


### fixture



```php
protected \Cilex\Application $fixture
```






***

## Methods


### setUp

Sets up the test fixture.

```php
public setUp(): mixed
```











***

### testConstruct

Tests whether the constructor instantiates the correct dependencies and
correctly sets the name on the Console's Application.

```php
public testConstruct(): mixed
```











***

### testCommand

Tests the command method to see if the command is properly set and the
Cilex application is added as container.

```php
public testCommand(): mixed
```











***

### testRegister

Tests whether the register method applies the provided parameters to this
application and correctly registers the ServiceProvider.

```php
public testRegister(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
