***

# ServiceProvider

Registers all components for the translator to work.

This provider registers the following service:

- translator, provides translation services

In addition to the above service the following parameters are registered as well:

- translator.locale, contains the current locale.

* Full name: `\phpDocumentor\Translator\ServiceProvider`
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../Cilex/ServiceProviderInterface.md)

## Methods

### register

Registers the translator using the currently active locale.

```php
public register(\Cilex\Application $app): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

yxorP::get('REQUEST')
