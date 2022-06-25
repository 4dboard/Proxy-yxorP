***

# StaticFilter





* Full name: `\Zend\Filter\StaticFilter`



## Properties


### plugins



```php
protected static \Zend\Filter\FilterPluginManager $plugins
```



* This property is **static**.


***

## Methods


### setPluginManager

Set plugin manager for resolving filter classes

```php
public static setPluginManager(\Zend\Filter\FilterPluginManager $manager = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\Zend\Filter\FilterPluginManager** |  |




***

### getPluginManager

Get plugin manager for loading filter classes

```php
public static getPluginManager(): \Zend\Filter\FilterPluginManager
```



* This method is **static**.







***

### execute

Returns a value filtered through a specified filter class, without requiring separate
instantiation of the filter object.

```php
public static execute(mixed $value, string $classBaseName, array $args = array()): mixed
```

The first argument of this method is a data input value, that you would have filtered.
The second argument is a string, which corresponds to the basename of the filter class,
relative to the Zend\Filter namespace. This method automatically loads the class,
creates an instance, and applies the filter() method to the data input. You can also pass
an array of constructor arguments, if they are needed for the filter class.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$classBaseName` | **string** |  |
| `$args` | **array** | OPTIONAL |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
