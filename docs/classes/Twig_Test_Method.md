***

# Twig_Test_Method

Represents a method template test.

* Full name: `\Twig_Test_Method`
* Parent class: [`\Twig_Test`](./Twig_Test.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### extension

```php
protected $extension
```

***

### method

```php
protected $method
```

***

## Methods

### __construct

```php
public __construct(\Twig\Extension\ExtensionInterface $extension, mixed $method, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **\Twig\Extension\ExtensionInterface** |  |
| `$method` | **mixed** |  |
| `$options` | **array** |  |

***

### compile

```php
public compile(): mixed
```

***

### hasOneMandatoryArgument

```php
public hasOneMandatoryArgument(): bool
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

### getCallable

```php
public getCallable(): mixed
```

yxorP::get('REQUEST')
