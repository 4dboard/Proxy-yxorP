***

# HelperConfig

Service manager configuration for i18n view helpers.

* Full name: `\Zend\I18n\View\HelperConfig`
* This class implements:
  [`\Zend\ServiceManager\ConfigInterface`](../../ServiceManager/ConfigInterface.md)

## Properties

### invokables

Pre-aliased view helpers

```php
protected array $invokables
```

***

## Methods

### configureServiceManager

Configure the provided service manager instance with the configuration in this class.

```php
public configureServiceManager(\Zend\ServiceManager\ServiceManager $serviceManager): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceManager` | **\Zend\ServiceManager\ServiceManager** |  |

yxorP::get('REQUEST')
