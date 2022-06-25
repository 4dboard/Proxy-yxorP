***

# InvalidArgumentException

Exception for invalid arguments provided to the instantiator

* Full name: `\Doctrine\Instantiator\Exception\InvalidArgumentException`
* Parent class: [`InvalidArgumentException`](../../../InvalidArgumentException.md)
* This class implements:
  [`\Doctrine\Instantiator\Exception\ExceptionInterface`](./ExceptionInterface.md)

## Methods

### fromNonExistingClass

```php
public static fromNonExistingClass(string $className): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

***

### fromAbstractClass

```php
public static fromAbstractClass(\ReflectionClass $reflectionClass): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |

***

### fromEnum

```php
public static fromEnum(string $className): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

yxorP::get('REQUEST')
