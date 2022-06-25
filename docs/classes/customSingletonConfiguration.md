***

# customSingletonConfiguration

* Full name: `\customSingletonConfiguration`
* This class implements:
  [`\ezcBaseConfigurationInitializer`](./ezcBaseConfigurationInitializer.md)

## Methods

### configureObject

Configures the given object, or returns the proper object depending on the given identifier.

```php
public static configureObject(mixed $object): mixed
```

In case a string identifier was given, it should return the associated object, in case an object was given the method
should return null.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

yxorP::get('REQUEST')
