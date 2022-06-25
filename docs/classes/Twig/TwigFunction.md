***

# TwigFunction

Represents a template function.

* Full name: `\Twig\TwigFunction`

## Properties

### name

```php
protected $name
```

***

### callable

```php
protected $callable
```

***

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
public __construct(mixed $name, mixed $callable, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$callable` | **mixed** |  |
| `$options` | **array** |  |

***

### getName

```php
public getName(): mixed
```

***

### getCallable

```php
public getCallable(): mixed
```

***

### getNodeClass

```php
public getNodeClass(): mixed
```

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

### isVariadic

```php
public isVariadic(): mixed
```

***

### isDeprecated

```php
public isDeprecated(): mixed
```

***

### getDeprecatedVersion

```php
public getDeprecatedVersion(): mixed
```

***

### getAlternative

```php
public getAlternative(): mixed
```

yxorP::get('REQUEST')
