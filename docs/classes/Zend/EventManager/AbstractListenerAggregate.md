***

# AbstractListenerAggregate

Abstract aggregate listener

* Full name: `\Zend\EventManager\AbstractListenerAggregate`
* This class implements:
  [`\Zend\EventManager\ListenerAggregateInterface`](./ListenerAggregateInterface.md)
* This class is an **Abstract class**

## Properties

### listeners

```php
protected \Zend\Stdlib\CallbackHandler[] $listeners
```

***

## Methods

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
