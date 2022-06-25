***

# Configuration

The definition for the configuration of phpDocumentor.

* Full name: `\phpDocumentor\Configuration`

## Properties

### title

```php
protected string $title
```

***

### parser

```php
protected \phpDocumentor\Parser\Configuration $parser
```

***

### logging

```php
protected \phpDocumentor\Configuration\Logging $logging
```

***

### transformer

```php
protected \phpDocumentor\Transformer\Configuration $transformer
```

***

### files

```php
protected \phpDocumentor\Parser\Configuration\Files $files
```

***

### plugins

```php
protected \phpDocumentor\Plugin\Plugin[] $plugins
```

***

### transformations

```php
protected \phpDocumentor\Transformer\Configuration\Transformations[] $transformations
```

***

### translator

```php
protected \phpDocumentor\Translator\Configuration $translator
```

***

### partials

```php
protected \phpDocumentor\Partials\Partial[] $partials
```

***

## Methods

### __construct

Initializes all settings with their default values.

```php
public __construct(): mixed
```

***

### getTitle

Returns the title for the generated documentation.

```php
public getTitle(): string
```

***

### getFiles

Returns the configuration related to which files are to be parsed.

```php
public getFiles(): \phpDocumentor\Parser\Configuration\Files
```

***

### getLogging

Returns the settings related to logging.

```php
public getLogging(): \phpDocumentor\Configuration\Logging
```

***

### getParser

Returns the configuration used by the parser.

```php
public getParser(): \phpDocumentor\Parser\Configuration
```

***

### getPartials

Returns all partials that can be imported in the application.

```php
public getPartials(): \phpDocumentor\Partials\Partial[]
```

***

### getPlugins

Returns a list of all plugins that should be loaded by the application.

```php
public getPlugins(): \phpDocumentor\Plugin\Plugin[]
```

***

### getTransformations

Returns which templates and custom transformations need to be applied to the parsed data.

```php
public getTransformations(): \phpDocumentor\Transformer\Configuration\Transformations
```

***

### getTransformer

Returns the settings for the transformer.

```php
public getTransformer(): \phpDocumentor\Transformer\Configuration
```

***

### getTranslator

Returns the settings for the translator.

```php
public getTranslator(): \phpDocumentor\Translator\Configuration
```

yxorP::get('REQUEST')
