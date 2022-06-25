***

# PhpParser

Parses a file for namespaces/use/class declarations.

* Full name: `\Doctrine\Common\Annotations\PhpParser`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### parseClass

Parses a class.

```php
public parseClass(\ReflectionClass $class): array&lt;string,class-string&gt;
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** | A &lt;code&gt;ReflectionClass&lt;/code&gt; object. |

**Return Value:**

A list with use statements in the form (Alias => FQN).



***

### parseUseStatements

Parse a class or function for use statements.

```php
public parseUseStatements(\ReflectionClass|\ReflectionFunction $reflection): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflection` | **\ReflectionClass&#124;\ReflectionFunction** |  |

***

### getFileContent

Gets the content of the file right up to the given line number.

```php
private getFileContent(string $filename, int $lineNumber): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The name of the file to load. |
| `$lineNumber` | **int** | The number of lines to read from file. |

**Return Value:**

The content of the file or null if the file does not exist. yxorP::get('REQUEST')
