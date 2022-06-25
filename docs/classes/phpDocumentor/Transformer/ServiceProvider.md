***

# ServiceProvider

This provider is responsible for registering the transformer component with the given Application.

* Full name: `\phpDocumentor\Transformer\ServiceProvider`
* Parent class: [`stdClass`](../../stdClass.md)
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../Cilex/ServiceProviderInterface.md)

## Methods

### register

Registers services on the given app.

```php
public register(\Cilex\Application $app): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance. |

***

### provideTemplatingSystem

Initializes the templating system in the container.

```php
protected provideTemplatingSystem(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

yxorP::get('REQUEST')
