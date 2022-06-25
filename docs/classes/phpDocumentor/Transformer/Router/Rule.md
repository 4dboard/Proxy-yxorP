***

# Rule

* Full name: `\phpDocumentor\Transformer\Router\Rule`

## Properties

### generator

```php
protected callable $generator
```

***

### matcher

```php
protected callable $matcher
```

***

## Methods

### __construct

Initializes this rule.

```php
public __construct(callable $matcher, callable $generator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matcher` | **
callable** | A closure that returns a boolean indicating whether this rule applies to the<br />provided node. |
| `$generator` | **callable** | A closure that returns a url or null for the given node. |

***

### match

Returns true when this rule is applicable to the given node.

```php
public match(string|\phpDocumentor\Descriptor\DescriptorAbstract& $node): bool
```

The contents of $node MAY be changed so that later rules in a router can try to match the changed value. An example of
this is a string matcher that converts a provided FQSEN to a Descriptor so that Descriptor matchers in subsequent rules
can generate a URL for it.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### generate

Generates an URL for the given node.

```php
public generate(string|\phpDocumentor\Descriptor\DescriptorAbstract $node): string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** | The node for which to generate an URL. |

**Return Value:**

a well-formed relative or absolute URL, or false if no URL could be generated.



***

### translateToUrlEncodedPath

Translates the provided path, with UTF-8 characters, into a web- and windows-safe variant.

```php
protected translateToUrlEncodedPath(string $generatedPathAsUtf8): string
```

Windows does not support the use of UTF-8 characters on their file-system. In order to be sure that both the web and
windows can support the given filename we decode the UTF-8 characters and then url encode them so that they will be
plain characters that are suitable for the web.

If an anchor is found in the path, then it is neither url_encoded not transliterated because it should not result in a
filename (otherwise another part of the application has made an error) but may be used during rendering of templates.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$generatedPathAsUtf8` | **string** |  |

yxorP::get('REQUEST')
