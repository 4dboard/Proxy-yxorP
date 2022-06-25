***

# Article

* Full name: `\JMS\Serializer\Tests\Fixtures\Article`

## Properties

### element

```php
public $element
```

***

### value

```php
public $value
```

***

## Methods

### serializeToXml

```php
public serializeToXml(\JMS\Serializer\XmlSerializationVisitor $visitor, mixed $data, \JMS\Serializer\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlSerializationVisitor** |  |
| `$data` | **mixed** |  |
| `$context` | **\JMS\Serializer\Context** |  |

***

### serializeToJson

```php
public serializeToJson(\JMS\Serializer\JsonSerializationVisitor $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonSerializationVisitor** |  |

***

### serializeToYml

```php
public serializeToYml(\JMS\Serializer\YamlSerializationVisitor $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\YamlSerializationVisitor** |  |

***

### deserializeFromXml

```php
public deserializeFromXml(\JMS\Serializer\XmlDeserializationVisitor $visitor, \SimpleXMLElement $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\XmlDeserializationVisitor** |  |
| `$data` | **\SimpleXMLElement** |  |

***

### deserializeFromJson

```php
public deserializeFromJson(\JMS\Serializer\JsonDeserializationVisitor $visitor, array $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\JMS\Serializer\JsonDeserializationVisitor** |  |
| `$data` | **array** |  |

yxorP::get('REQUEST')
