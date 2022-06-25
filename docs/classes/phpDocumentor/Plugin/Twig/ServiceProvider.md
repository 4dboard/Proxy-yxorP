***

# ServiceProvider

Provides a series of services that are necessary for Twig to work with phpDocumentor.

This provider uses the translator component to fuel the twig writer and ands the to the twig writer to the writer
collection. This enables transformations to mention 'twig' as their writer attribute.

* Full name: `\phpDocumentor\Plugin\Twig\ServiceProvider`
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../../Cilex/ServiceProviderInterface.md)

**See Also:**

* \phpDocumentor\Plugin\Twig\Writer\Twig - for more information on using this.

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

yxorP::get('REQUEST')
