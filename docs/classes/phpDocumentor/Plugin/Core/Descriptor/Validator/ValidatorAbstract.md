***

# ValidatorAbstract

Base class for DocBlock Validations.

* Full name: `\phpDocumentor\Plugin\Core\Descriptor\Validator\ValidatorAbstract`
* This class is an **Abstract class**

## Properties

### translate

```php
protected \phpDocumentor\Translator\Translator $translate
```

***

### entityName

Name of the "entity" being validated.

```php
protected string $entityName
```

***

### lineNumber

Line number of the docblock

```php
protected int $lineNumber
```

***

### docblock

Docblock for the file.

```php
protected \phpDocumentor\Reflection\DocBlock $docblock
```

***

### source

Source element of the DocBlock.

```php
protected \phpDocumentor\Reflection\BaseReflector $source
```

***

### options

Array of options that may or may not be used whilst validating

```php
protected array $options
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $name, \phpDocumentor\Reflection\DocBlock|null $docblock = null, \phpDocumentor\Reflection\BaseReflector|null $source = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the &quot;entity&quot; |
| `$docblock` | **\phpDocumentor\Reflection\DocBlock&#124;null** | Docblock |
| `$source` | **\phpDocumentor\Reflection\BaseReflector&#124;null** | Source Element. |

***

### setOptions

Set the options that may be used whilst validating the docblocks.

```php
public setOptions(array $options): void
```

Can contain configuration as long as each validator knows how to interrogate it

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Options that may be used during validation |

***

### isValid

```php
public isValid(\phpDocumentor\Reflection\BaseReflector $element): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Reflection\BaseReflector** |  |

***

### dispatch

Dispatches an event to the Event Dispatcher.

```php
public dispatch(string $name, \phpDocumentor\Event\EventAbstract $event): void
```

This method tries to dispatch an event; if no Event Dispatcher has been set than this method will explicitly not fail
and return null.

By not failing we make the Event Dispatcher optional and is it easier for people to re-use this component in their own
application.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the event to dispatch. |
| `$event` | **\phpDocumentor\Event\EventAbstract** | Arguments for this event. |

***

### log

Dispatches a logging request.

```php
public log(string $message, string $priority = LogLevel::INFO): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **string** | The logging priority. |

***

### logParserError

Dispatches a parser error to be logged.

```php
public logParserError(string $type, string $code, string $line, string[] $variables = array()): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The logging priority as string |
| `$code` | **string** | The message to log. |
| `$line` | **string** | The line number where the error occurred.. |
| `$variables` | **string[]** | an array with message substitution variables. |

***

### debug

Dispatches a logging request to log a debug message.

```php
public debug(string $message): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |

***

### __

Translates the ID or message in the given language.

```php
public __(string $message, array $variables = array()): string
```

Translation messages may contain any formatting as used by the php vsprintf function.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | ID or message to translate. |
| `$variables` | **array** | Variables to use for substitution. |

***

### getConfiguration

Returns the configuration for this object.

```php
public getConfiguration(): \Zend\Config\Config
```

***

### getEventDispatcher

Returns the event dispatcher.

```php
public getEventDispatcher(): \phpDocumentor\Event\Dispatcher
```

***

### getTranslator

Returns the translation component.

```php
public getTranslator(): \phpDocumentor\Translator\Translator|null
```

yxorP::get('REQUEST')
