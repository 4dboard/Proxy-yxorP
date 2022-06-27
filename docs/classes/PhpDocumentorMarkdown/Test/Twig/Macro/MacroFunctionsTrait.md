***

# MacroFunctionsTrait

A PHP wrapper for Twig macros. Used for testing.

* Full name: `\PhpDocumentorMarkdown\Test\Twig\Macro\MacroFunctionsTrait`

## Methods

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
| `$relativeTo` | **
string&#124;null** | The path to make relative to (usually path of the md file that this is being printed to). |
| `$name` | **string&#124;null** | Link text. |

***

***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

