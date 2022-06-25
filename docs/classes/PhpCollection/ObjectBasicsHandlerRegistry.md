***

# ObjectBasicsHandlerRegistry

Registry for handlers that provide ObjectBasics functionality for classes.

You want to register a handler if you cannot implement the ObjectBasics interface, for example
because a class is provided by a third-party package, or built into PHP.

* Full name: `\PhpCollection\ObjectBasicsHandlerRegistry`
* This class is an **Abstract class**



## Properties


### handlers



```php
private static $handlers
```



* This property is **static**.


***

### defaultObjectHandler



```php
private static $defaultObjectHandler
```



* This property is **static**.


***

### aliases



```php
private static $aliases
```



* This property is **static**.


***

## Methods


### addAliasFor

Defines an alias.

```php
public static addAliasFor(string $handlingClass, string $aliasClass): mixed
```

$aliasClass must be a sub-type (extend or implement) $handlingClass; otherwise you will run into trouble.

Aliases can only be one level deep,

   i.e. aliasClass -> handlingClass                      is supported,
   but  aliasClass -> anotherAliasClass -> handlingClass is not.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handlingClass` | **string** | The class that should be aliased, i.e. MyDateTime |
| `$aliasClass` | **string** | The class that should be used instead, i.e. DateTime |




***

### addHandlerFor



```php
public static addHandlerFor(mixed $handlingClass, mixed $handlerInstanceOrClassName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handlingClass` | **mixed** |  |
| `$handlerInstanceOrClassName` | **mixed** |  |




***

### getHandler



```php
public static getHandler(mixed $className): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **mixed** |  |




***

### __construct



```php
final private __construct(): mixed
```





* This method is **final**.





***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
