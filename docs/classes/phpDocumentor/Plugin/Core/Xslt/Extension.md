***

# Extension

XSLT filters that can be used inside a template.



* Full name: `\phpDocumentor\Plugin\Core\Xslt\Extension`



## Properties


### descriptorBuilder



```php
public static \phpDocumentor\Descriptor\ProjectDescriptorBuilder $descriptorBuilder
```



* This property is **static**.


***

### routers



```php
public static \phpDocumentor\Transformer\Router\Queue $routers
```



* This property is **static**.


***

## Methods


### markdown

Markdown filter.

```php
public static markdown(string $text): string
```

Example usage inside template would be:

```
<div class="long_description">
    <xsl:value-of
        select="php:function('phpDocumentor\Plugin\Core\Xslt\Extension::markdown',
            string(docblock/long-description))"
        disable-output-escaping="yes" />
</div>
```

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |




***

### path

Returns a relative URL from the webroot if the given FQSEN exists in the project.

```php
public static path(string $fqsen): bool|string
```

Example usage inside template would be (where @link is an attribute called link):

```
<xsl:value-of select="php:function('phpDocumentor\Plugin\Core\Xslt\Extension::path', string(@link))" />
```

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |




***

### typeOfElement

Example usage inside template would be (where @link is an attribute called link):

```php
public static typeOfElement(string $link): string
```

```
<xsl:value-of select="php:function('phpDocumentor\Plugin\Core\Xslt\Extension::typeOfElement', string(@link))" />
```

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** |  |




***

### getDocumentedElement

Returns a Descriptor Object if the given FQSEN exists in the project.

```php
private static getDocumentedElement(string $fqsen): bool|\phpDocumentor\Descriptor\DescriptorAbstract
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
