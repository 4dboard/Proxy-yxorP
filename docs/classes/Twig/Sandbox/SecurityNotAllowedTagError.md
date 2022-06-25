***

# SecurityNotAllowedTagError

Exception thrown when a not allowed tag is used in a template.

* Full name: `\Twig\Sandbox\SecurityNotAllowedTagError`
* Parent class: [`\Twig\Sandbox\SecurityError`](./SecurityError.md)

## Properties

### tagName

```php
private $tagName
```

***

## Methods

### __construct

```php
public __construct(mixed $message, mixed $tagName, mixed $lineno = -1, mixed $filename = null, \Exception $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$tagName` | **mixed** |  |
| `$lineno` | **mixed** |  |
| `$filename` | **mixed** |  |
| `$previous` | **\Exception** |  |

***

### getTagName

```php
public getTagName(): mixed
```

***

## Inherited methods

### __construct

Constructor.

```php
public __construct(string $message, int $lineno = -1, \Twig\Source|string|null $source = null, \Exception $previous = null): mixed
```

Set the line number to -1 to enable its automatic guessing. Set the name to null to enable its automatic guessing.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The error message |
| `$lineno` | **int** | The template line where the error occurred |
| `$source` | **\Twig\Source&#124;string&#124;null** | The source context where the error occurred |
| `$previous` | **\Exception** | The previous exception |

***

### getRawMessage

Gets the raw message.

```php
public getRawMessage(): string
```

**Return Value:**

The raw message



***

### getTemplateFile

Gets the logical name where the error occurred.

```php
public getTemplateFile(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The name



***

### setTemplateFile

Sets the logical name where the error occurred.

```php
public setTemplateFile(string $name): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name |

***

### getTemplateName

Gets the logical name where the error occurred.

```php
public getTemplateName(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The name



***

### setTemplateName

Sets the logical name where the error occurred.

```php
public setTemplateName(string $name): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name |

***

### getTemplateLine

Gets the template line where the error occurred.

```php
public getTemplateLine(): int
```

**Return Value:**

The template line



***

### setTemplateLine

Sets the template line where the error occurred.

```php
public setTemplateLine(int $lineno): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineno` | **int** | The template line |

***

### getSourceContext

Gets the source context of the Twig template where the error occurred.

```php
public getSourceContext(): \Twig\Source|null
```

***

### setSourceContext

Sets the source context of the Twig template where the error occurred.

```php
public setSourceContext(\Twig\Source $source = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Twig\Source** |  |

***

### guess

```php
public guess(): mixed
```

***

### appendMessage

```php
public appendMessage(mixed $rawMessage): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawMessage` | **mixed** |  |

yxorP::get('REQUEST')
