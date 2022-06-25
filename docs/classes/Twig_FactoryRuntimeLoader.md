***

# Twig_FactoryRuntimeLoader

Lazy loads the runtime implementations for a Twig element.

* Full name: `\Twig_FactoryRuntimeLoader`
* Parent class: [`\Twig\RuntimeLoader\FactoryRuntimeLoader`](./Twig/RuntimeLoader/FactoryRuntimeLoader.md)

## Inherited methods

### __construct

```php
public __construct(array $map = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$map` | **array** | An array where keys are class names and values factory callables |

***

### load

Creates the runtime implementation of a Twig element (filter/function/test).

```php
public load(mixed $class): object|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** | A runtime class |

**Return Value:**

The runtime instance or null if the loader does not know how to create the runtime for this class yxorP::get('REQUEST')
