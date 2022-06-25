***

# Debug

Registers all the debug tools.



* Full name: `\Symfony\Component\Debug\Debug`



## Properties


### enabled



```php
private static $enabled
```



* This property is **static**.


***

## Methods


### enable

Enables the debug tools.

```php
public static enable(int $errorReportingLevel = E_ALL, bool $displayErrors = true): mixed
```

This method registers an error handler and an exception handler.

If the Symfony ClassLoader component is available, a special
class loader is also registered.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorReportingLevel` | **int** | The level of error reporting you want |
| `$displayErrors` | **bool** | Whether to display errors (for development) or just log them (for production) |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
