***

# Files

Represents the settings in the phpdoc.xml related to finding the files that are to be parsed.

* Full name: `\phpDocumentor\Parser\Configuration\Files`

## Properties

### examples

```php
protected string[] $examples
```

***

### directories

```php
protected string[] $directories
```

***

### files

```php
protected string[] $files
```

***

### ignore

```php
protected string[] $ignore
```

***

### ignoreHidden

```php
protected bool $ignoreHidden
```

***

### ignoreSymlinks

```php
protected bool $ignoreSymlinks
```

***

## Methods

### __construct

Initializes this configuration directive with the required files and directories.

```php
public __construct(string[] $directories = array(), string[] $files = array(), string[] $ignore = array(), string[] $examples = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directories` | **string[]** |  |
| `$files` | **string[]** |  |
| `$ignore` | **string[]** |  |
| `$examples` | **string[]** |  |

***

### getDirectories

Returns a list of directories to recursively scan for files to be parsed.

```php
public getDirectories(): \string[]
```

***

### getFiles

Returns a list of files to parse.

```php
public getFiles(): \string[]
```

***

### getIgnore

Returns the 'glob' expression used to determine which files to ignore.

```php
public getIgnore(): \string[]
```

***

### isIgnoreHidden

Returns whether to ignore hidden files and folders during parsing.

```php
public isIgnoreHidden(): bool
```

***

### isIgnoreSymlinks

Returns whether to ignore symlinks and not traverse them.

```php
public isIgnoreSymlinks(): bool
```

***

### getExamples

Returns all folders that may contain example files as referenced using the `@example` tag.

```php
public getExamples(): \string[]
```

yxorP::get('REQUEST')
