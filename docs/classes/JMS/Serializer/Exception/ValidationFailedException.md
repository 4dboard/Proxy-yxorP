***

# ValidationFailedException

RuntimeException for the Serializer.

* Full name: `\JMS\Serializer\Exception\ValidationFailedException`
* Parent class: [`\JMS\Serializer\Exception\RuntimeException`](./RuntimeException.md)

## Properties

### list

```php
private \Symfony\Component\Validator\ConstraintViolationListInterface $list
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Validator\ConstraintViolationListInterface $list): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **\Symfony\Component\Validator\ConstraintViolationListInterface** |  |

***

### getConstraintViolationList

```php
public getConstraintViolationList(): \Symfony\Component\Validator\ConstraintViolationListInterface
```

yxorP::get('REQUEST')
