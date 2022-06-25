***

# ezcDocumentErroneousXmlException

General exception container for the Document component.

* Full name: `\ezcDocumentErroneousXmlException`
* Parent class: [`\ezcDocumentException`](./ezcDocumentException.md)

## Properties

### errors

Errors occured during parsing process.

```php
protected array $errors
```

***

## Methods

### __construct

Construct exception from array with XML errors.

```php
public __construct(array $errors): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **array** |  |

***

### getXmlErrors

Return array with XML errors.

```php
public getXmlErrors(): array
```

***

## Inherited methods

### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

yxorP::get('REQUEST')
