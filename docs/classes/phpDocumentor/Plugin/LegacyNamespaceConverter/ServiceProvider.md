***

# ServiceProvider

Converts all underscored class names into namespaces.

This plugin will enable a non-namespaced application to be interpreted as being namespaced for documentation purposes by
separating the Classes by underscore and converting the prefix to a series of namespaces.

For example:

    `My_Special_ClassName` will be transformed into the class `ClassName` with namespace `My\Special`.

* Full name: `\phpDocumentor\Plugin\LegacyNamespaceConverter\ServiceProvider`
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../../Cilex/ServiceProviderInterface.md)

**See Also:**

* https://github.com/phpDocumentor/phpDocumentor2/pull/1135 -

## Properties

### plugin

```php
private \phpDocumentor\Plugin\Plugin $plugin
```

***

## Methods

### __construct

Construct plugin with a the relevant configuration

```php
public __construct(\phpDocumentor\Plugin\Plugin $plugin): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\phpDocumentor\Plugin\Plugin** |  |

***

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

### addNamespaceFilter

Attaches the filter responsible for the conversion to all structural elements.

```php
private addNamespaceFilter(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder, \phpDocumentor\Descriptor\Filter\Filter $filterManager): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |
| `$filterManager` | **\phpDocumentor\Descriptor\Filter\Filter** |  |

yxorP::get('REQUEST')
