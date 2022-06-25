***

# Twig_Autoloader

Autoloads Twig classes.



* Full name: `\Twig_Autoloader`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.




## Methods


### register

Registers Twig_Autoloader as an SPL autoloader.

```php
public static register(bool $prepend = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prepend` | **bool** | whether to prepend the autoloader or not |




***

### autoload

Handles autoloading of classes.

```php
public static autoload(string $class): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | a class name |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
