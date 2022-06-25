***

# MacroTest





* Full name: `\PhpDocumentorMarkdown\Test\Twig\Macro\MacroTest`
* Parent class: [`\PhpDocumentorMarkdown\Test\Twig\Macro\MacroTestCase`](./MacroTestCase.md)




## Methods


### testMdEsc

Test mdEsc macro.

```php
public testMdEsc(): void
```











***

### testMdGetRelativePath

Test mdGetRelativePath macro.

```php
public testMdGetRelativePath(): void
```











***

### testMdNodePath

Test mdNodePath macro.

```php
public testMdNodePath(): void
```











***

### testMdClassPath

Test mdClassPath macro.

```php
public testMdClassPath(): void
```











***

### testMdClassLink

Test mdClassLink macro.

```php
public testMdClassLink(): void
```











***


## Inherited methods


### setUp



```php
protected setUp(): void
```











***

### loadTemplate

Load the template.

```php
protected loadTemplate(): mixed
```











***

### assertMacroOutputEquals

Assert macro output.

```php
protected static assertMacroOutputEquals( $expected,  $actual): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **** |  |
| `$actual` | **** |  |




***

### getMacroData

Get the macro data from the template.

```php
protected getMacroData(string $macro, mixed $input): \PhpDocumentorMarkdown\Test\Twig\Macro\MacroData|null
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$macro` | **string** | Macro name to run. |
| `$input` | **mixed** | Input to give the macro. |




***

### mdClassLink

Create a relative md link to a class.

```php
public mdClassLink(object|string $nodeOrNamespace, string|null $relativeTo = null, string|null $name = null): \PhpDocumentorMarkdown\Test\Twig\Macro\MacroData|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodeOrNamespace` | **object&#124;string** | The node to get the link for or a PHP class namespace string. |
| `$relativeTo` | **string&#124;null** | The path to make relative to (usually path of the md file that this is being printed to). |
| `$name` | **string&#124;null** | Link text. |




***

### getTestTemplatePath

Get the path to test templates.

```php
public getTestTemplatePath(): string
```











***

### getRelativeIncludePath

Get the relative path to production template include dir.

```php
public getRelativeIncludePath(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
