***

# FileExtensionEscapingStrategy

Default autoescaping strategy based on file names.

This strategy sets the HTML as the default autoescaping strategy,
but changes it based on the template name.

Note that there is no runtime performance impact as the
default autoescaping strategy is set at compilation time.

* Full name: `\Twig\FileExtensionEscapingStrategy`




## Methods


### guess

Guesses the best autoescaping strategy based on the file name.

```php
public static guess(string $name): string|false
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The template name |


**Return Value:**

The escaping strategy name to use or false to disable



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
