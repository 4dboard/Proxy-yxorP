***

# Parser

This class parses structure.xml and generates the api documentation.

* Full name: `\PHPDocMD\Parser`

## Properties

### structureXmlFile

Path to the structure.xml file.

```php
protected string $structureXmlFile
```

***

### classDefinitions

The list of classes and interfaces.

```php
protected array $classDefinitions
```

***

## Methods

### __construct

```php
public __construct(string $structureXmlFile): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$structureXmlFile` | **string** |  |

***

### run

Starts the process.

```php
public run(): mixed
```

***

### getClassDefinitions

Gets all classes and interfaces from the file and puts them in an easy to use array.

```php
protected getClassDefinitions(\PHPDocMD\SimpleXmlElement $xml): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xml` | **\PHPDocMD\SimpleXmlElement** |  |

***

### parseMethods

Parses all the method information for a single class or interface.

```php
protected parseMethods(\SimpleXMLElement $class): array
```

You must pass an xml element that refers to either the class or interface element from structure.xml.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\SimpleXMLElement** |  |

***

### parseProperties

Parses all property information for a single class or interface.

```php
protected parseProperties(\SimpleXMLElement $class): array
```

You must pass an xml element that refers to either the class or interface element from structure.xml.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\SimpleXMLElement** |  |

***

### parseConstants

Parses all constant information for a single class or interface.

```php
protected parseConstants(\SimpleXMLElement $class): array
```

You must pass an xml element that refers to either the class or interface element from structure.xml.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\SimpleXMLElement** |  |

***

### expandMethods

This method goes through all the class definitions, and adds non-overridden method information from parent classes.

```php
protected expandMethods(string $className): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

***

### expandProperties

This method goes through all the class definitions, and adds non-overridden property information from parent classes.

```php
protected expandProperties(string $className): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

yxorP::get('REQUEST')
