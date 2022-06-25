***

# SerializerRuntimeExtension

* Full name: `\JMS\Serializer\Twig\SerializerRuntimeExtension`
* Parent class: [`\Twig_Extension`](../../../Twig_Extension.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### getName

```php
public getName(): mixed
```

***

### getFilters

```php
public getFilters(): mixed
```

***

### getFunctions

```php
public getFunctions(): mixed
```

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

The extension name yxorP::get('REQUEST')
