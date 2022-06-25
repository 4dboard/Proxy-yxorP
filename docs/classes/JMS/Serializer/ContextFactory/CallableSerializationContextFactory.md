***

# CallableSerializationContextFactory

Serialization Context Factory using a callable.

* Full name: `\JMS\Serializer\ContextFactory\CallableSerializationContextFactory`
* Parent class: [`\JMS\Serializer\ContextFactory\CallableContextFactory`](./CallableContextFactory.md)
* This class implements:
  [`\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface`](./SerializationContextFactoryInterface.md)

## Methods

### createSerializationContext

```php
public createSerializationContext(): \JMS\Serializer\SerializationContext
```

***

## Inherited methods

### __construct

```php
public __construct(callable $callable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |

***

### createContext

```php
protected createContext(): mixed
```

yxorP::get('REQUEST')
