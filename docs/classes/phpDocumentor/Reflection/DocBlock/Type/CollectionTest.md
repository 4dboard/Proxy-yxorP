***

# CollectionTest

Test class for \phpDocumentor\Reflection\DocBlock\Type\Collection

* Full name: `\phpDocumentor\Reflection\DocBlock\Type\CollectionTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)

**See Also:**

* http://phpdoc.org -

## Methods

### testConstruct

```php
public testConstruct(): void
```

***

### testConstructWithTypes

```php
public testConstructWithTypes(): void
```

***

### testConstructWithNamespace

```php
public testConstructWithNamespace(): void
```

***

### testConstructWithNamespaceAliases

```php
public testConstructWithNamespaceAliases(): void
```

***

### testAdd

```php
public testAdd(string $fixture, array $expected): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fixture` | **string** |  |
| `$expected` | **array** |  |

***

### testAddWithoutNamespace

```php
public testAddWithoutNamespace(string $fixture, array $expected): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fixture` | **string** |  |
| `$expected` | **array** |  |

***

### testAddMethodsAndProperties

```php
public testAddMethodsAndProperties(string $fixture, array $expected): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fixture` | **string** |  |
| `$expected` | **array** |  |

***

### testAddWithInvalidArgument

```php
public testAddWithInvalidArgument(): void
```

***

### provideTypesToExpand

Returns the types and their expected values to test the retrieval of types.

```php
public provideTypesToExpand(string $method, string $namespace = &#039;\My\Space\&#039;): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Name of the method consuming this data provider. |
| `$namespace` | **string** | Name of the namespace to user as basis. |

***

### provideTypesToExpandWithoutNamespace

Returns the types and their expected values to test the retrieval of types when no namespace is available.

```php
public provideTypesToExpandWithoutNamespace(string $method): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Name of the method consuming this data provider. |

***

### provideTypesToExpandWithPropertyOrMethod

Returns the method and property types and their expected values to test the retrieval of types.

```php
public provideTypesToExpandWithPropertyOrMethod(string $method): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Name of the method consuming this data provider. |

yxorP::get('REQUEST')
