***

# ServiceProvider

Provides a series of services in order to handle the configuration for phpDocumentor.

This class is responsible for registering a 'Merger' service that is used to combine several configuration definitions
into one and will add a new option `config` to all commands of phpDocumentor.

Exposed services:

- 'config', the configuration service containing all options and parameters for phpDocumentor.
- 'config.merger', a service used to combine the configuration template with the user configuration file (phpdoc.xml of
  phpdoc.dist.xml).

The following variables are exposed:

- 'config.path.template', the location of the configuration template with defaults.
- 'config.path.user', the location of the user configuration file that will be merged with the template.
- 'config.class', the class name of the root configuration object.

* Full name: `\phpDocumentor\Configuration\ServiceProvider`
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../Cilex/ServiceProviderInterface.md)

## Methods

### register

Adds the Configuration object to the DIC.

```php
public register(\Cilex\Application $app): mixed
```

phpDocumentor first loads the template config file (/data/phpdoc.tpl.xml)
and then the phpdoc.dist.xml, or the phpdoc.xml if it exists but not both, from the current working directory.

The user config file (either phpdoc.dist.xml or phpdoc.xml) is merged with the template file.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance |

***

### addMerger

Initializes and adds the configuration merger object as the 'config.merger' service to the container.

```php
private addMerger(\Cilex\Application $container): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Cilex\Application** |  |

***

### addMergerAnnotations

Adds the annotations for the Merger component to the Serializer.

```php
private addMergerAnnotations(\Cilex\Application $container): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Cilex\Application** |  |

yxorP::get('REQUEST')
