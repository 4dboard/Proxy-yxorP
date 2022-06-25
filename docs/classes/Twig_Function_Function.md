***

# Twig_Function_Function

Represents a function template function.

Use \Twig\TwigFunction instead.

* Full name: `\Twig_Function_Function`
* Parent class: [`\Twig_Function`](./Twig_Function.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### function

```php
protected $function
```

***

## Methods

### __construct

```php
public __construct(mixed $function, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |
| `$options` | **array** |  |

***

### compile

```php
public compile(): mixed
```

***

## Inherited methods

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
