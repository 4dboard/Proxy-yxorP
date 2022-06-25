***

# Twig

Template class to use Twig to generate templates.



* Full name: `\phpDocumentor\Plugin\Scrybe\Template\Twig`
* This class implements:
[`\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface`](./TemplateInterface.md)



## Properties


### path



```php
protected string $path
```






***

### name



```php
protected string $name
```






***

### extension



```php
protected string $extension
```






***

## Methods


### __construct

Constructs the twig template and sets the default values.

```php
public __construct(string $templatePath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templatePath` | **string** | the base location for templates. |




***

### setName

Sets the name for this template.

```php
public setName(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | A template name that may be composed of alphanumeric characters, underscores and/or hyphens. |




***

### getName

Returns the name of this template.

```php
public getName(): string
```

See setName() for a specification of the format.









***

### setPath

Sets the base path where the templates are stored.

```php
public setPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### getPath

Returns the base path where the templates are stored.

```php
public getPath(): string
```











***

### setExtension

Sets the file extension used to determine the template filename.

```php
public setExtension(string $extension): void
```

The file extension of the destination format needs to be set. This is used to retrieve the correct template.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** | an extension (thus only containing alphanumeric characters and be between 2 and 4<br />characters in size). |




***

### getExtension

Returns the extension of the destination file extension.

```php
public getExtension(): string
```










**See Also:**

* \phpDocumentor\Plugin\Scrybe\Template\setExtension - for more information and the format of the extension.

***

### decorate

Applies the relevant template upon the given content.

```php
public decorate(string $contents, string[] $options = array()): string
```

This method takes the combines the template with the given contents and generates a final piece of text
from that.

The user may add additional options that are set as parameters in the template.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |
| `$options` | **string[]** |  |



**See Also:**

* \phpDocumentor\Plugin\Scrybe\Template\getTemplateFileName() - how the filename is assembled

***

### getAssets

Returns a list of files that need to be copied to the destination location.

```php
public getAssets(): string[]
```

Examples of assets can be:

* CSS files
* Javascript files
* Images

Assets for this template engine means every file that is contained in a subfolder of the template folder and
does not end with the extension twig.

Thus every file in the root of the template folder is ignored and files and directories having only twig
templates (considered as being includes) are not included in this list.









***

### getTemplateFilename

Returns the filename for the template.

```php
protected getTemplateFilename(): string
```

The filename is composed of the following components:

- the template base folder
- the template's name
- a path separator
- the literal 'layout' combined with the extension
- and as final extension the literal '.twig'









***

### getTwigEnvironment

Constructs and returns the twig environment.

```php
protected getTwigEnvironment(): \Twig_Environment
```

This uses the path as defined with this class to instantiate a new Environment and disables the escaping
mechanism since we use it to generate HTML; even embedded.








**See Also:**

*  - $path for the template base path.

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
