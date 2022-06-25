***

# Twig_Filter_Function

Represents a function template filter.

Use \Twig\TwigFilter instead.

* Full name: `\Twig_Filter_Function`
* Parent class: [`\Twig_Filter`](./Twig_Filter.md)
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
public getSafe(\Twig\Node\Node $filterArgs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterArgs` | **\Twig\Node\Node** |  |

***

### getPreservesSafety

```php
public getPreservesSafety(): mixed
```

***

### getPreEscape

```php
public getPreEscape(): mixed
```

***

### getCallable

```php
public getCallable(): mixed
```

yxorP::get('REQUEST')
