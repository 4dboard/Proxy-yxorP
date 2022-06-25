***

# Twig_Util_DeprecationCollector





* Full name: `\Twig_Util_DeprecationCollector`
* Parent class: [`\Twig\Util\DeprecationCollector`](./Twig/Util/DeprecationCollector.md)






## Inherited methods


### __construct



```php
public __construct(\Twig\Environment $twig): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$twig` | **\Twig\Environment** |  |




***

### collectDir

Returns deprecations for templates contained in a directory.

```php
public collectDir(string $dir, string $ext = &#039;.twig&#039;): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** | A directory where templates are stored |
| `$ext` | **string** | Limit the loaded templates by extension |


**Return Value:**

An array of deprecations



***

### collect

Returns deprecations for passed templates.

```php
public collect(\Traversable $iterator): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Traversable** | An iterator of templates (where keys are template names and values the contents of the template) |


**Return Value:**

An array of deprecations



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
