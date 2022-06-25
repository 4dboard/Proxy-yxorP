***

# TwigMarkdownAnchorLink

Twig extension to create Markdown anchor links (within a single page).

Links need to be created in the same order as the anchors appear in the document, so that links with
same title will be correctly suffixed with a numeric index.

Adds the following function:

 anchorLink(string title): string

* Full name: `\Cvuorinen\PhpdocMarkdownPublic\Extension\TwigMarkdownAnchorLink`
* Parent class: [`\Twig_Extension`](../../../Twig_Extension.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NAME`|public| |&#039;TwigMarkdownAnchorLink&#039;|

## Properties


### links

Keep track of the created links so we can check if a link with the same title already exists.

```php
private static array $links
```



* This property is **static**.


***

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

### createAnchorLink



```php
public createAnchorLink(string $title): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |




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
