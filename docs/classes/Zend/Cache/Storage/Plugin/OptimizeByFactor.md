***

# OptimizeByFactor

Abstract aggregate listener

* Full name: `\Zend\Cache\Storage\Plugin\OptimizeByFactor`
* Parent class: [`\Zend\Cache\Storage\Plugin\AbstractPlugin`](./AbstractPlugin.md)

## Methods

### attach

{@inheritDoc}

```php
public attach(\Zend\EventManager\EventManagerInterface $events, mixed $priority = 1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |
| `$priority` | **mixed** |  |

***

### optimizeByFactor

Optimize by factor on a success _RESULT_

```php
public optimizeByFactor(\Zend\Cache\Storage\PostEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\PostEvent** |  |

***

## Inherited methods

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
