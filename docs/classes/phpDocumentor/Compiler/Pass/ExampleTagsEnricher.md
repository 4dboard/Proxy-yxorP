***

# ExampleTagsEnricher

This index builder collects all examples from tags and inserts them into the example index.

* Full name: `\phpDocumentor\Compiler\Pass\ExampleTagsEnricher`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |9002|

## Properties

### exampleAssembler

```php
private \phpDocumentor\Descriptor\Builder\Reflector\Tags\ExampleAssembler $exampleAssembler
```

***

## Methods

### __construct

Initializes this compiler pass with its dependencies.

```php
public __construct(\phpDocumentor\Descriptor\Example\Finder $finder): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finder` | **\phpDocumentor\Descriptor\Example\Finder** | Finds examples in several directories. |

***

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

### replaceInlineExamples

Replaces the example tags in the description with the contents of the found example.

```php
protected replaceInlineExamples(\phpDocumentor\Descriptor\DescriptorAbstract $element): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

yxorP::get('REQUEST')
