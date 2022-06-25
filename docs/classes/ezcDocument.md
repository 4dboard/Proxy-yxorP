***

# ezcDocument

A base class for document type handlers.

* Full name: `\ezcDocument`
* This class implements:
  [`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)
* This class is an **Abstract class**

## Properties

### options

XML document base options.

```php
protected \ezcDocumentXmlOptions $options
```

***

### path

Current document path, where the operations happen.

```php
protected string $path
```

***

### errors

Errors occured during the conversion process

```php
protected array $errors
```

***

## Methods

### __construct

Construct new document

```php
public __construct(\ezcDocumentOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentOptions** |  |

***

### triggerError

Trigger visitor error

```php
public triggerError(int $level, string $message, string $file = null, int $line = null, int $position = null): void
```

Emit a vistitor error, and convert it to an exception depending on the error reporting settings.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |

***

### getErrors

Return list of errors occured during visiting the document.

```php
public getErrors(): array
```

May be an empty array, if on errors occured, or a list of ezcDocumentVisitException objects.









***

### loadString

Create document from input string

```php
public loadString(string $string): void
```

Create a document of the current type handler class and parse it into a usable internal structure.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### loadFile

Create document from file

```php
public loadFile(string $file): void
```

Create a document of the current type handler class and parse it into a usable internal structure. The default
implementation just calls loadString(), but you may want to provide an optimized implementation.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### getPath

Get document base path

```php
public getPath(): string
```

***

### setPath

Set document base path

```php
public setPath(string $path): mixed
```

The base path will be used as a base for relative file inclusions in the document.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### getAsDocbook

Return document compiled to the docbook format

```php
public getAsDocbook(): \ezcDocumentDocbook
```

The internal document structure is compiled to the docbook format and the resulting docbook document is returned.

This method is required for all formats to have one central format, so that each format can be compiled into each other
format using docbook as an intermediate format.

You may of course just call an existing converter for this conversion.

* This method is **abstract**.

***

### createFromDocbook

Create document from docbook document

```php
public createFromDocbook(\ezcDocumentDocbook $document): void
```

A document of the docbook format is provided and the internal document structure should be created out of this.

This method is required for all formats to have one central format, so that each format can be compiled into each other
format using docbook as an intermediate format.

You may of course just call an existing converter for this conversion.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentDocbook** |  |

***

### save

Return document as string

```php
public save(): string
```

Serialize the document to a string an return it.

* This method is **abstract**.

yxorP::get('REQUEST')
