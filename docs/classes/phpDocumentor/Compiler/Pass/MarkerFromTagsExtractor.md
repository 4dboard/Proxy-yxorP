***

# MarkerFromTagsExtractor

This index builder collects all markers from tags and inserts them into the marker index.

* Full name: `\phpDocumentor\Compiler\Pass\MarkerFromTagsExtractor`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |9000|

## Methods

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```

***

### execute

Executes a compiler pass.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **
\phpDocumentor\Descriptor\ProjectDescriptor** | Representation of the Object Graph that can be manipulated. |

***

### getFileDescriptor

Retrieves the File Descriptor from the given element.

```php
protected getFileDescriptor(\phpDocumentor\Descriptor\DescriptorAbstract $element): \phpDocumentor\Descriptor\FileDescriptor
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### addTodoMarkerToFile

Adds a marker with the TO DO information to the file on a given line number.

```php
protected addTodoMarkerToFile(\phpDocumentor\Descriptor\FileDescriptor $fileDescriptor, \phpDocumentor\Descriptor\TagDescriptor $todo, int $lineNumber): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileDescriptor` | **\phpDocumentor\Descriptor\FileDescriptor** |  |
| `$todo` | **\phpDocumentor\Descriptor\TagDescriptor** |  |
| `$lineNumber` | **int** |  |

yxorP::get('REQUEST')
