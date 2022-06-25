***

# ServiceLocatorUsageException





* Full name: `\Zend\ServiceManager\Exception\ServiceLocatorUsageException`
* Parent class: [`\Zend\ServiceManager\Exception\ServiceNotFoundException`](./ServiceNotFoundException.md)




## Methods


### fromInvalidPluginManagerRequestedServiceName

Static constructor

```php
public static fromInvalidPluginManagerRequestedServiceName(\Zend\ServiceManager\AbstractPluginManager $pluginManager, \Zend\ServiceManager\ServiceLocatorInterface $parentLocator, string $serviceName, \Exception $previousException): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pluginManager` | **\Zend\ServiceManager\AbstractPluginManager** |  |
| `$parentLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$serviceName` | **string** |  |
| `$previousException` | **\Exception** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
