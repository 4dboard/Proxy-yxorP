***

# Factory

A factory used to retrieve a template engine given a simplified name.

With this factory it is possible to abstract away the actual class names and provide a faux name that is suitable for
configuration purposes. An additional benefit is that any plugin is able to register their own template engines if
desired.

* Full name: `\phpDocumentor\Plugin\Scrybe\Template\Factory`

## Properties

### engines

```php
protected string[] $engines
```

***

## Methods

### __construct

Registers the default and provided Template engines.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface[] $engines = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$engines` | **
\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface[]** | Associative array of the engine class names and their name as key. |

***

### register

Associates a human-readable / simplified name with a class name representing a template engine.

```php
public register(string $name, \phpDocumentor\Plugin\Scrybe\Template\TemplateInterface $templateEngine): void
```

The class belonging to the given class name should implement the TemplateInterface. If it does not then this method
won't complain (as no instantiation is done here for performance reasons) but the `get()` method will throw an
exception.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$templateEngine` | **\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface** |  |

**See Also:**

* \phpDocumentor\Plugin\Scrybe\Template\get() - to retrieve an instance for the given $name.

***

### get

Returns a new instance of the template engine belonging to the given name.

```php
public get(string $name): \phpDocumentor\Plugin\Scrybe\Template\TemplateInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

yxorP::get('REQUEST')
