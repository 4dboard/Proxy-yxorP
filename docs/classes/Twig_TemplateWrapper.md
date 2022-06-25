***

# Twig_TemplateWrapper

Exposes a template to userland.



* Full name: `\Twig_TemplateWrapper`
* Parent class: [`\Twig\TemplateWrapper`](./Twig/TemplateWrapper.md)






## Inherited methods


### render

Renders the template.

```php
public render(array $context = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** | An array of parameters to pass to the template |


**Return Value:**

The rendered template



***

### display

Displays the template.

```php
public display(array $context = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** | An array of parameters to pass to the template |




***

### hasBlock

Checks if a block is defined.

```php
public hasBlock(string $name, array $context = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The block name |
| `$context` | **array** | An array of parameters to pass to the template |




***

### getBlockNames

Returns defined block names in the template.

```php
public getBlockNames(array $context = []): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** | An array of parameters to pass to the template |


**Return Value:**

An array of defined template block names



***

### renderBlock

Renders a template block.

```php
public renderBlock(string $name, array $context = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The block name to render |
| `$context` | **array** | An array of parameters to pass to the template |


**Return Value:**

The rendered block



***

### displayBlock

Displays a template block.

```php
public displayBlock(string $name, array $context = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The block name to render |
| `$context` | **array** | An array of parameters to pass to the template |




***

### getSourceContext



```php
public getSourceContext(): \Twig\Source
```











***

### getTemplateName



```php
public getTemplateName(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
