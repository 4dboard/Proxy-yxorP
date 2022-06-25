***

# testBaseInitCallback

Test class for ezcBaseInitTest.



* Full name: `\testBaseInitCallback`
* This class implements:
[`\ezcBaseConfigurationInitializer`](./ezcBaseConfigurationInitializer.md)




## Methods


### configureObject

Configures the given object, or returns the proper object depending on
the given identifier.

```php
public static configureObject(mixed $objectToConfigure): mixed
```

In case a string identifier was given, it should return the associated
object, in case an object was given the method should return null.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectToConfigure` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
