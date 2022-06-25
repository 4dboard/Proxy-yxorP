***

# ConstraintViolationHandler





* Full name: `\JMS\Serializer\Handler\ConstraintViolationHandler`
* This class implements:
[`\JMS\Serializer\Handler\SubscribingHandlerInterface`](./SubscribingHandlerInterface.md)




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

### serializeListToXml



```php
public serializeListToXml(\JMS\Serializer\XmlSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolationList $list, array $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlSerializationVisitor** |  |
| `$list` | **\Symfony\Component\Validator\ConstraintViolationList** |  |
| `$type` | **array** |  |




***

### serializeListToJson



```php
public serializeListToJson(\JMS\Serializer\JsonSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolationList $list, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonSerializationVisitor** |  |
| `$list` | **\Symfony\Component\Validator\ConstraintViolationList** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### serializeListToYml



```php
public serializeListToYml(\JMS\Serializer\YamlSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolationList $list, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\YamlSerializationVisitor** |  |
| `$list` | **\Symfony\Component\Validator\ConstraintViolationList** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### serializeViolationToXml



```php
public serializeViolationToXml(\JMS\Serializer\XmlSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolation $violation, array $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlSerializationVisitor** |  |
| `$violation` | **\Symfony\Component\Validator\ConstraintViolation** |  |
| `$type` | **array** |  |




***

### serializeViolationToJson



```php
public serializeViolationToJson(\JMS\Serializer\JsonSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolation $violation, array $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonSerializationVisitor** |  |
| `$violation` | **\Symfony\Component\Validator\ConstraintViolation** |  |
| `$type` | **array** |  |




***

### serializeViolationToYml



```php
public serializeViolationToYml(\JMS\Serializer\YamlSerializationVisitor $visitor, \Symfony\Component\Validator\ConstraintViolation $violation, array $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\YamlSerializationVisitor** |  |
| `$violation` | **\Symfony\Component\Validator\ConstraintViolation** |  |
| `$type` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
