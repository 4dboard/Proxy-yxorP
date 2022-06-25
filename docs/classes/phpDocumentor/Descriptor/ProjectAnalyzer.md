***

# ProjectAnalyzer

Analyzes a Project Descriptor and collects key information.

This class can be used by external tools to analyze the Project Descriptor and collect key information from it such as
the total number of elements per type of Descriptor, the number of top level namespaces or the number of parent classes
that could not be interpreted by the Compiler passes.

* Full name: `\phpDocumentor\Descriptor\ProjectAnalyzer`

## Properties

### elementCount

```php
protected int $elementCount
```

***

### fileCount

```php
protected int $fileCount
```

***

### topLevelNamespaceCount

```php
protected int $topLevelNamespaceCount
```

***

### unresolvedParentClassesCount

```php
protected int $unresolvedParentClassesCount
```

***

### descriptorCountByType

```php
protected int[] $descriptorCountByType
```

***

## Methods

### analyze

Analyzes the given project descriptor and populates this object's properties.

```php
public analyze(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |

***

### __toString

Returns a textual report of the findings of this class.

```php
public __toString(): string
```

***

### addElementToCounter

Increments the counter for element's class in the class counters.

```php
protected addElementToCounter(array $classCounters, \phpDocumentor\Descriptor\DescriptorAbstract $element): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classCounters` | **array** |  |
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### incrementUnresolvedParentCounter

Checks whether the given element is a class and if its parent could not be resolved; increment the counter.

```php
protected incrementUnresolvedParentCounter(\phpDocumentor\Descriptor\DescriptorAbstract $element): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### findAllElements

Returns all elements from the project descriptor.

```php
protected findAllElements(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): \phpDocumentor\Descriptor\DescriptorAbstract[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |

yxorP::get('REQUEST')
