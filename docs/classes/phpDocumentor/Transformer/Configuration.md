***

# Configuration

Configuration definition for the transformer.

* Full name: `\phpDocumentor\Transformer\Configuration`

## Properties

### source

```php
protected string|null $source
```

***

### target

```php
protected string $target
```

***

### externalClassDocumentation

```php
protected \phpDocumentor\Transformer\Configuration\ExternalClassDocumentation[] $externalClassDocumentation
```

***

## Methods

### getSource

Returns the location where the output of the parser is located.

```php
public getSource(): string|null
```

***

### setSource

Set the source location where the parser's output can be found.

```php
public setSource(string $source): void
```

This might, for example, be used in the Run command to read the parser's output location from the `target`
setting in the configuration of the parser and then, by using this method, be set.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |

***

### getTarget

Returns the destination location where the output of the transformation process should be written to.

```php
public getTarget(): string
```

***

### getExternalClassDocumentation

Returns the references to external documentation sites for classes not found in the parsed contents.

```php
public getExternalClassDocumentation(): \phpDocumentor\Transformer\Configuration\ExternalClassDocumentation[]
```

***

### setExternalClassDocumentation

Sets references to external documentation sites for classes not found in the parsed contents.

```php
public setExternalClassDocumentation(\phpDocumentor\Transformer\Configuration\ExternalClassDocumentation[] $externalClassDocumentation): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$externalClassDocumentation` | **\phpDocumentor\Transformer\Configuration\ExternalClassDocumentation[]** |  |

yxorP::get('REQUEST')
