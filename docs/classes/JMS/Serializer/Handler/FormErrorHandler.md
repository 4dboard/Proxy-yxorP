***

# FormErrorHandler

* Full name: `\JMS\Serializer\Handler\FormErrorHandler`
* This class implements:
  [`\JMS\Serializer\Handler\SubscribingHandlerInterface`](./SubscribingHandlerInterface.md)

## Properties

### translator

```php
private $translator
```

***

## Methods

### getSubscribingMethods

Return format:

```php
public static getSubscribingMethods(): array
```

array(
array(
'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
'format' => 'json',
'type' => 'DateTime',
'method' => 'serializeDateTimeToJson',
),
)

The direction and method keys can be omitted.

* This method is **static**.

***

### __construct

```php
public __construct(\Symfony\Component\Translation\TranslatorInterface $translator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Symfony\Component\Translation\TranslatorInterface** |  |

***

### serializeFormToXml

```php
public serializeFormToXml(\JMS\Serializer\XmlSerializationVisitor $visitor, \Symfony\Component\Form\Form $form, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlSerializationVisitor** |  |
| `$form` | **\Symfony\Component\Form\Form** |  |
| `$type` | **array** |  |

***

### serializeFormToJson

```php
public serializeFormToJson(\JMS\Serializer\JsonSerializationVisitor $visitor, \Symfony\Component\Form\Form $form, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonSerializationVisitor** |  |
| `$form` | **\Symfony\Component\Form\Form** |  |
| `$type` | **array** |  |

***

### serializeFormToYml

```php
public serializeFormToYml(\JMS\Serializer\YamlSerializationVisitor $visitor, \Symfony\Component\Form\Form $form, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\YamlSerializationVisitor** |  |
| `$form` | **\Symfony\Component\Form\Form** |  |
| `$type` | **array** |  |

***

### serializeFormErrorToXml

```php
public serializeFormErrorToXml(\JMS\Serializer\XmlSerializationVisitor $visitor, \Symfony\Component\Form\FormError $formError, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlSerializationVisitor** |  |
| `$formError` | **\Symfony\Component\Form\FormError** |  |
| `$type` | **array** |  |

***

### serializeFormErrorToJson

```php
public serializeFormErrorToJson(\JMS\Serializer\JsonSerializationVisitor $visitor, \Symfony\Component\Form\FormError $formError, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonSerializationVisitor** |  |
| `$formError` | **\Symfony\Component\Form\FormError** |  |
| `$type` | **array** |  |

***

### serializeFormErrorToYml

```php
public serializeFormErrorToYml(\JMS\Serializer\YamlSerializationVisitor $visitor, \Symfony\Component\Form\FormError $formError, array $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\YamlSerializationVisitor** |  |
| `$formError` | **\Symfony\Component\Form\FormError** |  |
| `$type` | **array** |  |

***

### getErrorMessage

```php
private getErrorMessage(\Symfony\Component\Form\FormError $error): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Symfony\Component\Form\FormError** |  |

***

### convertFormToArray

```php
private convertFormToArray(\JMS\Serializer\VisitorInterface $visitor, \Symfony\Component\Form\Form $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\VisitorInterface** |  |
| `$data` | **\Symfony\Component\Form\Form** |  |

yxorP::get('REQUEST')
