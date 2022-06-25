***

# AbstractPlugin

Abstract aggregate listener

* Full name: `\Zend\Cache\Storage\Plugin\AbstractPlugin`
* Parent class: [`\Zend\EventManager\AbstractListenerAggregate`](../../../EventManager/AbstractListenerAggregate.md)
* This class implements:
  [`\Zend\Cache\Storage\Plugin\PluginInterface`](./PluginInterface.md)
* This class is an **Abstract class**

## Properties

### options

```php
protected \Zend\Cache\Storage\Plugin\PluginOptions $options
```

***

## Methods

### setOptions

Set pattern options

```php
public setOptions(\Zend\Cache\Storage\Plugin\PluginOptions $options): \Zend\Cache\Storage\Plugin\AbstractPlugin
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Storage\Plugin\PluginOptions** |  |

***

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Storage\Plugin\PluginOptions
```

***

## Inherited methods

### detach

Detach all previously attached listeners

```php
public detach(\Zend\EventManager\EventManagerInterface $events): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |

yxorP::get('REQUEST')
