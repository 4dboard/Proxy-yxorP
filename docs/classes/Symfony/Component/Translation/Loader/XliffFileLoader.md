***

# XliffFileLoader

XliffFileLoader loads translations from XLIFF files.

* Full name: `\Symfony\Component\Translation\Loader\XliffFileLoader`
* This class implements:
  [`\Symfony\Component\Translation\Loader\LoaderInterface`](./LoaderInterface.md)

## Methods

### load

Loads a locale.

```php
public load(mixed $resource, mixed $locale, mixed $domain = &#039;messages&#039;): \Symfony\Component\Translation\MessageCatalogue
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$locale` | **mixed** | A locale |
| `$domain` | **mixed** | The domain |

**Return Value:**

A MessageCatalogue instance



***

### extract

```php
private extract(mixed $resource, \Symfony\Component\Translation\MessageCatalogue $catalogue, mixed $domain): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **mixed** |  |

***

### extractXliff1

Extract messages and metadata from DOMDocument into a MessageCatalogue.

```php
private extractXliff1(\DOMDocument $dom, \Symfony\Component\Translation\MessageCatalogue $catalogue, string $domain): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** | Source to extract messages and metadata |
| `$catalogue` | **
\Symfony\Component\Translation\MessageCatalogue** | Catalogue where we&#039;ll collect messages and metadata |
| `$domain` | **string** | The domain |

***

### extractXliff2

```php
private extractXliff2(\DOMDocument $dom, \Symfony\Component\Translation\MessageCatalogue $catalogue, string $domain): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** |  |
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **string** |  |

***

### utf8ToCharset

Convert a UTF8 string to the specified encoding.

```php
private utf8ToCharset(string $content, string $encoding = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | String to decode |
| `$encoding` | **string** | Target encoding |

***

### validateSchema

Validates and parses the given file into a DOMDocument.

```php
private validateSchema(string $file, \DOMDocument $dom, string $schema): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$dom` | **\DOMDocument** |  |
| `$schema` | **string** | source of the schema |

***

### getSchema

```php
private getSchema(mixed $xliffVersion): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xliffVersion` | **mixed** |  |

***

### fixXmlLocation

Internally changes the URI of a dependent xsd to be loaded locally.

```php
private fixXmlLocation(string $schemaSource, string $xmlUri): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaSource` | **string** | Current content of schema file |
| `$xmlUri` | **string** | External URI of XML to convert to local |

***

### getXmlErrors

Returns the XML errors of the internal XML parser.

```php
private getXmlErrors(bool $internalErrors): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$internalErrors` | **bool** |  |

**Return Value:**

An array of errors



***

### getVersionNumber

Gets xliff file version based on the root "version" attribute.

```php
private getVersionNumber(\DOMDocument $dom): string
```

Defaults to 1.2 for backwards compatibility.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** |  |

***

### parseNotesMetadata

```php
private parseNotesMetadata(\SimpleXMLElement $noteElement = null, mixed $encoding = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$noteElement` | **\SimpleXMLElement** |  |
| `$encoding` | **mixed** |  |

yxorP::get('REQUEST')
