***

# ForFileProxy

Proxies a generated Routing Rule to generate physical filenames.

By default a RoutingRule will generate a relative path on a webserver. This causes
issues between operating systems since Linux uses / and Windows \ as a directory
separator.

To make sure that the correct file is generated can this proxy be used to generate
a filename instead of a webserver path.

* Full name: `\phpDocumentor\Transformer\Router\ForFileProxy`



## Properties


### rule



```php
protected \phpDocumentor\Transformer\Router\Rule $rule
```






***

## Methods


### __construct

Registers the Routing Rule that needs to be translated with this proxy.

```php
public __construct(\phpDocumentor\Transformer\Router\Rule $rule): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rule` | **\phpDocumentor\Transformer\Router\Rule** |  |




***

### generate

Generates an URL for the given node.

```php
public generate(string|\phpDocumentor\Descriptor\DescriptorAbstract $node, string $directorySeparator = DIRECTORY_SEPARATOR): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** | The node for which to generate an URL. |
| `$directorySeparator` | **string** | Which directory separator should be used to generate the<br />paths with, defaults to the default separator for the current O/S. |


**Return Value:**

a well-formed relative or absolute URL, or false if no URL could be generated.



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
