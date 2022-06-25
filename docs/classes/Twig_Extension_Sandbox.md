***

# Twig_Extension_Sandbox





* Full name: `\Twig_Extension_Sandbox`
* Parent class: [`\Twig\Extension\SandboxExtension`](./Twig/Extension/SandboxExtension.md)






## Inherited methods


### __construct



```php
public __construct(\Twig\Sandbox\SecurityPolicyInterface $policy, mixed $sandboxed = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$policy` | **\Twig\Sandbox\SecurityPolicyInterface** |  |
| `$sandboxed` | **mixed** |  |




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

### enableSandbox



```php
public enableSandbox(): mixed
```











***

### disableSandbox



```php
public disableSandbox(): mixed
```











***

### isSandboxed



```php
public isSandboxed(): mixed
```











***

### isSandboxedGlobally



```php
public isSandboxedGlobally(): mixed
```











***

### setSecurityPolicy



```php
public setSecurityPolicy(\Twig\Sandbox\SecurityPolicyInterface $policy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$policy` | **\Twig\Sandbox\SecurityPolicyInterface** |  |




***

### getSecurityPolicy



```php
public getSecurityPolicy(): mixed
```











***

### checkSecurity



```php
public checkSecurity(mixed $tags, mixed $filters, mixed $functions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **mixed** |  |
| `$filters` | **mixed** |  |
| `$functions` | **mixed** |  |




***

### checkMethodAllowed



```php
public checkMethodAllowed(mixed $obj, mixed $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$method` | **mixed** |  |




***

### checkPropertyAllowed



```php
public checkPropertyAllowed(mixed $obj, mixed $method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$method` | **mixed** |  |




***

### ensureToStringAllowed



```php
public ensureToStringAllowed(mixed $obj): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |




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
