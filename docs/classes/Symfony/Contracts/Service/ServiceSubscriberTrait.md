***

# ServiceSubscriberTrait

Implementation of ServiceSubscriberInterface that determines subscribed services from
method return types. Service ids are available as "ClassName::methodName".

* Full name: `\Symfony\Contracts\Service\ServiceSubscriberTrait`

## Properties

### container

```php
protected \Psr\Container\ContainerInterface $container
```

***

## Methods

### getSubscribedServices

{@inheritdoc}

```php
public static getSubscribedServices(): array
```

* This method is **static**.

***

### setContainer

```php
public setContainer(\Psr\Container\ContainerInterface $container): ?\Psr\Container\ContainerInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Psr\Container\ContainerInterface** |  |

***

***


