***

# Transformations

Contains the templates and custom transformations that are applied during transformation.

* Full name: `\phpDocumentor\Transformer\Configuration\Transformations`

## Properties

### templates

```php
protected \phpDocumentor\Transformer\Configuration\Transformations\Template[] $templates
```

***

### transformations

```php
protected \phpDocumentor\Transformer\Transformation[] $transformations
```

***

## Methods

### __construct

Initializes this transformations configuration with a list of templates and transformations.

```php
public __construct(\phpDocumentor\Transformer\Configuration\Transformations\Template[] $templates = array(), \phpDocumentor\Transformer\Transformation[] $transformations = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templates` | **\phpDocumentor\Transformer\Configuration\Transformations\Template[]** |  |
| `$transformations` | **\phpDocumentor\Transformer\Transformation[]** |  |

***

### getTemplates

Returns a list of templates that should be applied during the transformation process.

```php
public getTemplates(): \phpDocumentor\Transformer\Configuration\Transformations\Template[]
```

***

### getTransformations

Returns a list of transformations that should be applied during transformation after the templates have been processed.

```php
public getTransformations(): \phpDocumentor\Transformer\Transformation[]
```

yxorP::get('REQUEST')
