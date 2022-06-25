***

# ezcDocumentPcssDeclarationDirective

Pdf CSS layout directive.

* Full name: `\ezcDocumentPcssDeclarationDirective`
* Parent class: [`\ezcDocumentPcssDirective`](./ezcDocumentPcssDirective.md)

## Methods

### getType

Return the type of the directive

```php
public getType(): string
```

***

### __set_state

Recreate directive from var_export

```php
public static __set_state(array $properties): \ezcDocumentPcssDirective
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |

***

## Inherited methods

### __construct

Construct directive from address and formats

```php
public __construct(string $address, array $formats, string $file = null, int $line = null, int $position = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** |  |
| `$formats` | **array** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |

yxorP::get('REQUEST')
