***

# Annotation

Annotations class.

* Full name: `\Doctrine\Common\Annotations\Annotation`

## Properties

### value

Value property. Common among all derived classes.

```php
public mixed $value
```

***

## Methods

### __construct

```php
final public __construct(array&lt;string,mixed&gt; $data): mixed
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array<string,mixed>** | Key-value for properties to be defined in this class. |

***

### __get

Error handler for unknown property accessor in Annotation class.

```php
public __get(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Unknown property name. |

***

### __set

Error handler for unknown property mutator in Annotation class.

```php
public __set(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Unknown property name. |
| `$value` | **mixed** | Property value. |

yxorP::get('REQUEST')
