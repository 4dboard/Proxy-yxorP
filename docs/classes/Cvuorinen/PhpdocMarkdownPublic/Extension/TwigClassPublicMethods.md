***

# TwigClassPublicMethods

Twig extension to get only the public methods from a \phpDocumentor\Descriptor\ClassDescriptor instance.

Adds the following function to Twig:

publicMethods(ClassDescriptor class): MethodDescriptor[]

* Full name: `\Cvuorinen\PhpdocMarkdownPublic\Extension\TwigClassPublicMethods`
* Parent class: [`\Twig_Extension`](../../../Twig_Extension.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NAME`|public| |&#039;TwigClassPublicMethods&#039;|


## Methods


### getName

{@inheritdoc}

```php
public getName(): mixed
```











***

### getFunctions

{@inheritdoc}

```php
public getFunctions(): mixed
```











***

### getPublicMethods



```php
public getPublicMethods(\phpDocumentor\Descriptor\ClassDescriptor $class): \phpDocumentor\Descriptor\MethodDescriptor[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\phpDocumentor\Descriptor\ClassDescriptor** |  |




***


## Inherited methods


### initRuntime

Initializes the runtime environment.

```php
public initRuntime(\Twig\Environment $environment): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$environment` | **\Twig\Environment** |  |




***

### getTokenParsers

Returns the token parser instances to add to the existing list.

```php
public getTokenParsers(): \Twig\TokenParser\TokenParserInterface[]
```











***

### getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
public getNodeVisitors(): \Twig\NodeVisitor\NodeVisitorInterface[]
```











***

### getFilters

Returns a list of filters to add to the existing list.

```php
public getFilters(): \Twig\TwigFilter[]
```











***

### getTests

Returns a list of tests to add to the existing list.

```php
public getTests(): \Twig\TwigTest[]
```











***

### getFunctions

Returns a list of functions to add to the existing list.

```php
public getFunctions(): \Twig\TwigFunction[]
```











***

### getOperators

Returns a list of operators to add to the existing list.

```php
public getOperators(): array[]
```









**Return Value:**

First array of unary operators, second array of binary operators



***

### getGlobals

Returns a list of global variables to add to the existing list.

```php
public getGlobals(): array
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




**Return Value:**

An array of global variables



***

### getName

Returns the name of the extension.

```php
public getName(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




**Return Value:**

The extension name



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
