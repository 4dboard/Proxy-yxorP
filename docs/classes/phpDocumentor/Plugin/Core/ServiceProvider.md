***

# ServiceProvider

Register all services and subservices necessary to get phpDocumentor up and running.

This provider exposes no services of its own but populates the Writer Collection with the basic writers for
phpDocumentor and, for backwards compatibility, registers the service providers for Graphs, Twig and PDF to the
container.

* Full name: `\phpDocumentor\Plugin\Core\ServiceProvider`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../../Cilex/ServiceProviderInterface.md)
* This class is a **Final class**

## Methods

### register

Registers services on the given app.

```php
public register(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance. |

***

### registerWriters

Creates all writers for this plugin and adds them to the WriterCollection object.

```php
private registerWriters(\Cilex\Application $app): void
```

This action will enable transformations in templates to make use of these writers.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### registerTranslationMessages

Registers the Messages folder in this plugin as a source of translations.

```php
private registerTranslationMessages(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### registerDependenciesOnXsltExtension

Registers the Routing Queue and Descriptor Builder objects on the XSLT Extension class.

```php
private registerDependenciesOnXsltExtension(\Cilex\Application $app): void
```

In every template we use PHP helpers in order to be able to have routing that is universal between templates and convert
Markdown text into HTML (for example). The only way for XSL to do this is by having global functions or static methods
in a class because you cannot inject an object into an XSL processor.

With this method we make sure that all dependencies used by the static methods are injected as static properties.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### getTranslator

Returns the Translator service from the Service Locator.

```php
private getTranslator(\Cilex\Application $app): \phpDocumentor\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### getWriterCollection

Returns the WriterCollection service from the Service Locator.

```php
private getWriterCollection(\Cilex\Application $app): \phpDocumentor\Transformer\Writer\Collection
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

yxorP::get('REQUEST')
