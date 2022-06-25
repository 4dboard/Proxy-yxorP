***

# Twig_Extension_Profiler





* Full name: `\Twig_Extension_Profiler`
* Parent class: [`\Twig\Extension\ProfilerExtension`](./Twig/Extension/ProfilerExtension.md)






## Inherited methods


### __construct



```php
public __construct(\Twig\Profiler\Profile $profile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |




***

### enter



```php
public enter(\Twig\Profiler\Profile $profile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |




***

### leave



```php
public leave(\Twig\Profiler\Profile $profile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |




***

### getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
public getNodeVisitors(): \Twig\NodeVisitor\NodeVisitorInterface[]
```











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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
