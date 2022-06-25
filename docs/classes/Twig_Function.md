***

# Twig_Function

Represents a template function.

Use \Twig\TwigFunction instead.

* Full name: `\Twig_Function`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Twig_FunctionInterface`](./Twig_FunctionInterface.md)
  , [`\Twig_FunctionCallableInterface`](./Twig_FunctionCallableInterface.md)
* This class is an **Abstract class**

## Properties

### options

```php
protected $options
```

***

### arguments

```php
protected $arguments
```

***

## Methods

### __construct

```php
public __construct(array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### setArguments

```php
public setArguments(mixed $arguments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **mixed** |  |

***

### getArguments

```php
public getArguments(): mixed
```

***

### needsEnvironment

```php
public needsEnvironment(): mixed
```

***

### needsContext

```php
public needsContext(): mixed
```

***

### getSafe

```php
public getSafe(\Twig\Node\Node $functionArgs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionArgs` | **\Twig\Node\Node** |  |

***

### getCallable

```php
public getCallable(): mixed
```

yxorP::get('REQUEST')
