***

# Finder

Class used to find an example file's location based on a given ExampleDescriptor.

* Full name: `\phpDocumentor\Descriptor\Example\Finder`

## Properties

### sourceDirectory

```php
private string $sourceDirectory
```

***

### exampleDirectories

```php
private string[] $exampleDirectories
```

***

## Methods

### find

Attempts to find the example contents for the given descriptor.

```php
public find(\phpDocumentor\Descriptor\Tag\ExampleDescriptor $descriptor): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\Tag\ExampleDescriptor** |  |

***

### setSourceDirectory

Registers the project's root directory where an 'examples' folder can be expected.

```php
public setSourceDirectory(string $directory = &#039;&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |

***

### getSourceDirectory

Returns the project's root directory where an 'examples' folder can be expected.

```php
public getSourceDirectory(): string
```

***

### setExampleDirectories

Registers a series of directories that may contain examples.

```php
public setExampleDirectories(string[] $directories): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directories` | **string[]** |  |

***

### getExampleDirectories

Returns a series of directories that may contain examples.

```php
public getExampleDirectories(): string[]
```

***

### getExampleFileContents

Attempts to find the requested example file and returns its contents or null if no file was found.

```php
private getExampleFileContents(string $filename): string|null
```

This method will try several methods in search of the given example file, the first one it encounters is returned:

1. Iterates through all examples folders for the given filename
2. Checks the source folder for the given filename
3. Checks the 'examples' folder in the current working directory for examples
4. Checks the path relative to the current working directory for the given filename

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

***

### getExamplePathFromExampleDirectory

Get example filepath based on the example directory inside your project.

```php
private getExamplePathFromExampleDirectory(string $file): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### constructExamplePath

Returns a path to the example file in the given directory.

```php
private constructExamplePath(string $directory, string $file): string
```

.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |
| `$file` | **string** |  |

***

### getExamplePathFromSource

Get example filepath based on sourcecode.

```php
private getExamplePathFromSource(string $file): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

yxorP::get('REQUEST')
