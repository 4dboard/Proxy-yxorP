***

# ConfigServiceProviderTest

Test file for ConfigServiceProvider



* Full name: `\Cilex\Tests\Provider\ConfigServiceProviderTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)




## Methods


### testRegisterWillThrowExceptionIfConfigPathIsNotThere

Test that an exception is thrown if the config path is not present
or valid

```php
public testRegisterWillThrowExceptionIfConfigPathIsNotThere(): void
```











***

### testRegisterCanParseAJsonConfigFile

Test that the config provider can parse a json
configuration file

```php
public testRegisterCanParseAJsonConfigFile(): void
```











***

### testCanParseAPhpConfigFile



```php
public testCanParseAPhpConfigFile(): mixed
```











***

### testRegisterThrowsExceptionInCaseOfInvalidJsonConfigFile

Test that the config provider can throw an exception if
the json configuration file is invalid

```php
public testRegisterThrowsExceptionInCaseOfInvalidJsonConfigFile(): void
```











***

### testRegisterThrowsExceptionIfAnUnknownFormatIsPassed

Test that register will throw an exception if an unknown
format is passed in

```php
public testRegisterThrowsExceptionIfAnUnknownFormatIsPassed(): void
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
