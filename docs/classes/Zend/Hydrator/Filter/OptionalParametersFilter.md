***

# OptionalParametersFilter

Filter that includes methods which have no parameters or only optional parameters

* Full name: `\Zend\Hydrator\Filter\OptionalParametersFilter`
* This class implements:
  [`\Zend\Hydrator\Filter\FilterInterface`](./FilterInterface.md)

## Properties

### propertiesCache

Map of methods already analyzed by {@see OptionalParametersFilter::filter()}, cached for performance reasons

```php
protected static bool[] $propertiesCache
```

* This property is **static**.

***

## Methods

### filter

Should return true, if the given filter does not match

```php
public filter(mixed $property): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** | The name of the property |

yxorP::get('REQUEST')
