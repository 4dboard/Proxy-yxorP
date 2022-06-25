***

# ezcDocumentRst

Document handler for RST text documents.

RST (ReStructured Text) is a text based markup language developed inside the docutils project, with a rather complete
description of the markup language:

http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html

The basic RST syntax can be extended with so called directives, which can contain user specific markup blocks handled by
external applications or custom scripts. This class does not support all of the directives known from docutils yet, but
you may register custom additional ones.

RST can be converted forth and back between Docbook and RST. Additionally you may register cusom visitors for the
abstract sysntax tree (AST) the RST parser creates, to directly convert the AST into other languages then Docbook. Two
different visitors for XHTML are already implemented in the component:

- ezcDocumentRstXhtmlVisitor
- ezcDocumentRstXhtmlBodyVisitor

A basic conversion from a RST document to a Docbook document looks like:

<code>
 $document = new ezcDocumentRst();
 $document->loadFile( 'my_rst_doc.txt' );
 $docbook = $document->getAsDocbook();
 echo $docbook->save();
</code>

Additional directives, which are implemented by extending from the ezcDocumentRstDirective class, can be registerd
before the conversion:

<code>
 $document = new ezcDocumentRst();
 $document->registerDirective( 'address', 'myAddressDirective' );
 $document->loadString( <<<EORST
 Address example
 ===============

.. address:: John Doe
:street: Some Lane 42 EORST
);

$docbook = $document->getAsDocbook(); echo $docbook->save();
</code>

This class can also read docbook documents (ezcDocumentDocbook) and convert it back to RST, which then works like:

<code>
 $docbook = new ezcDocumentDocbook();
 $docbook->loadFile( 'docbook.xml' );

$rst = new ezcDocumentRst(); $rst->createFromDocbook( $docbook );

echo $rst->save();
</code>

* Full name: `\ezcDocumentRst`
* Parent class: [`\ezcDocument`](./ezcDocument.md)
* This class implements:
  [`\ezcDocumentXhtmlConversion`](./ezcDocumentXhtmlConversion.md)
  , [`\ezcDocumentValidation`](./ezcDocumentValidation.md)
  , [`\ezcDocumentErrorReporting`](./ezcDocumentErrorReporting.md)

## Properties

### directives

Registered directives

```php
protected array $directives
```

Directives are special RST element, which are documented at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#directives

Directives are the best entry point for custom rules, and you may register custom directive classes using the class
method registerDirective().




***

### roles

Registered interpreted text role handlers

```php
protected array $roles
```

Interpreted text roles are special RST element, which are documented at:
http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#interpreted-text

Interpreted text roles are the best entry point for custom rules for inline markup. You can register custom text role
using the class method registerRole().




***

### ast

Asbtract syntax tree.

```php
protected \ezcDocumentRstDocumentNode $ast
```

The internal representation of RST documents.




***

### contents

Plain RST contents as a string

```php
protected string $contents
```

***

## Methods

### registerDirective

Register directive handler

```php
public registerDirective(string $name, string $class): void
```

Register a custom directive handler for special directives or overwrite existing directive handlers. The directives are
specified by its
(lowercase) name and the class name, which should handle the directive and extend from ezcDocumentRstDirective.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$class` | **string** |  |

***

### registerRole

Register text role handler

```php
public registerRole(string $name, string $class): void
```

Register a custom text role handler for special text roles or overwrite existing text role handlers. The text roles are
specified by its
(lowercase) name and the class name, which should handle the text role and extend from ezcDocumentRstTextRole.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$class` | **string** |  |

***

### getDirectiveHandler

Get directive handler

```php
public getDirectiveHandler(string $name): string
```

Get directive handler class name for the specified name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getRoleHandler

Get text role handler

```php
public getRoleHandler(string $name): string
```

Get text role handler class name for the specified name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### loadString

Create document from input string

```php
public loadString(string $string): void
```

Create a document of the current type handler class and parse it into a usable internal structure.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

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

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\ezcDocumentDocbook** |  |

***

### getAsXhtml

Return document compiled to the HTML format

```php
public getAsXhtml(): \ezcDocumentXhtml
```

The internal document structure is compiled to the HTML format and the resulting HTML document is returned.

This is an optional interface for document markup languages which support a direct transformation to HTML as a shortcut.









***

### validateFile

Validate the input file

```php
public validateFile(string $file): mixed
```

Validate the input file against the specification of the current document format.

Returns true, if the validation succeded, and an array with ezcDocumentValidationError objects otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### validateString

Validate the input string

```php
public validateString(string $string): mixed
```

Validate the input string against the specification of the current document format.

Returns true, if the validation succeded, and an array with ezcDocumentValidationError objects otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### save

Return document as string

```php
public save(): string
```

Serialize the document to a string an return it.









***

## Inherited methods

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
