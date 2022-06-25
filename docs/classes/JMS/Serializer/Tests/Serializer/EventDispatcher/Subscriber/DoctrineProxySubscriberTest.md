***

# DoctrineProxySubscriberTest

* Full name: `\JMS\Serializer\Tests\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriberTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../../../PHPUnit_Framework_TestCase.md)

## Properties

### visitor

```php
private \JMS\Serializer\VisitorInterface $visitor
```

***

### subscriber

```php
private \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber $subscriber
```

***

### dispatcher

```php
private \JMS\Serializer\EventDispatcher\EventDispatcher $dispatcher
```

***

## Methods

### testRewritesProxyClassName

```php
public testRewritesProxyClassName(): mixed
```

***

### testDoesNotRewriteCustomType

```php
public testDoesNotRewriteCustomType(): mixed
```

***

### testProxyLoadingCanBeSkippedForVirtualTypes

```php
public testProxyLoadingCanBeSkippedForVirtualTypes(): mixed
```

***

### testProxyLoadingCanBeSkippedByExclusionStrategy

```php
public testProxyLoadingCanBeSkippedByExclusionStrategy(): mixed
```

***

### testEventTriggeredOnRealClassName

```php
public testEventTriggeredOnRealClassName(): mixed
```

***

### testListenersCanChangeType

```php
public testListenersCanChangeType(): mixed
```

***

### testListenersDoNotChangeTypeOnProxiesAndVirtualTypes

```php
public testListenersDoNotChangeTypeOnProxiesAndVirtualTypes(): mixed
```

***

### setUp

```php
protected setUp(): mixed
```

***

### createEvent

```php
private createEvent(mixed $object, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$type` | **array** |  |

yxorP::get('REQUEST')
