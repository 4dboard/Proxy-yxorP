***

# Environment

Stores the Twig configuration and renders templates.

* Full name: `\Twig\Environment`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;1.44.6&#039;|
|`VERSION_ID`|public| |14406|
|`MAJOR_VERSION`|public| |1|
|`MINOR_VERSION`|public| |44|
|`RELEASE_VERSION`|public| |6|
|`EXTRA_VERSION`|public| |&#039;&#039;|

## Properties

### charset

```php
protected $charset
```

***

### loader

```php
protected $loader
```

***

### debug

```php
protected $debug
```

***

### autoReload

```php
protected $autoReload
```

***

### cache

```php
protected $cache
```

***

### lexer

```php
protected $lexer
```

***

### parser

```php
protected $parser
```

***

### compiler

```php
protected $compiler
```

***

### baseTemplateClass

```php
protected $baseTemplateClass
```

***

### extensions

```php
protected $extensions
```

***

### parsers

```php
protected $parsers
```

***

### visitors

```php
protected $visitors
```

***

### filters

```php
protected $filters
```

***

### tests

```php
protected $tests
```

***

### functions

```php
protected $functions
```

***

### globals

```php
protected $globals
```

***

### runtimeInitialized

```php
protected $runtimeInitialized
```

***

### extensionInitialized

```php
protected $extensionInitialized
```

***

### loadedTemplates

```php
protected $loadedTemplates
```

***

### strictVariables

```php
protected $strictVariables
```

***

### unaryOperators

```php
protected $unaryOperators
```

***

### binaryOperators

```php
protected $binaryOperators
```

***

### templateClassPrefix

```php
protected $templateClassPrefix
```

***

### functionCallbacks

```php
protected $functionCallbacks
```

***

### filterCallbacks

```php
protected $filterCallbacks
```

***

### staging

```php
protected $staging
```

***

### originalCache

```php
private $originalCache
```

***

### bcWriteCacheFile

```php
private $bcWriteCacheFile
```

***

### bcGetCacheFilename

```php
private $bcGetCacheFilename
```

***

### lastModifiedExtension

```php
private $lastModifiedExtension
```

***

### extensionsByClass

```php
private $extensionsByClass
```

***

### runtimeLoaders

```php
private $runtimeLoaders
```

***

### runtimes

```php
private $runtimes
```

***

### optionsHash

```php
private $optionsHash
```

***

## Methods

### __construct

Constructor.

```php
public __construct(\Twig\Loader\LoaderInterface $loader = null, mixed $options = []): mixed
```

Available options:

* debug: When set to true, it automatically set "auto_reload" to true as well (default to false).

* charset: The charset used by the templates (default to UTF-8).

* base_template_class: The base template class to use for generated templates (default to \Twig\Template).

* cache: An absolute path where to store the compiled templates, a \Twig\Cache\CacheInterface implementation, or false
  to disable compilation cache (default).

* auto_reload: Whether to reload the template if the original source changed. If you don't provide the auto_reload
  option, it will be determined automatically based on the debug value.

* strict_variables: Whether to ignore invalid variables in templates
  (default to false).

* autoescape: Whether to enable auto-escaping (default to html):
  * false: disable auto-escaping * true: equivalent to html * html, js: set the autoescaping to one of the supported
  strategies * name: set the autoescaping strategy based on the template name extension * PHP callback: a PHP callback
  that returns an escaping strategy based on the template "name"

* optimizations: A flag that indicates which optimizations to apply
  (default to -1 which means that all optimizations are enabled; set it to 0 to disable).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Twig\Loader\LoaderInterface** |  |
| `$options` | **mixed** |  |

***

### getBaseTemplateClass

Gets the base template class for compiled templates.

```php
public getBaseTemplateClass(): string
```

**Return Value:**

The base template class name



***

### setBaseTemplateClass

Sets the base template class for compiled templates.

```php
public setBaseTemplateClass(string $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The base template class name |

***

### enableDebug

Enables debugging mode.

```php
public enableDebug(): mixed
```

***

### disableDebug

Disables debugging mode.

```php
public disableDebug(): mixed
```

***

### isDebug

Checks if debug mode is enabled.

```php
public isDebug(): bool
```

**Return Value:**

true if debug mode is enabled, false otherwise



***

### enableAutoReload

Enables the auto_reload option.

```php
public enableAutoReload(): mixed
```

***

### disableAutoReload

Disables the auto_reload option.

```php
public disableAutoReload(): mixed
```

***

### isAutoReload

Checks if the auto_reload option is enabled.

```php
public isAutoReload(): bool
```

**Return Value:**

true if auto_reload is enabled, false otherwise



***

### enableStrictVariables

Enables the strict_variables option.

```php
public enableStrictVariables(): mixed
```

***

### disableStrictVariables

Disables the strict_variables option.

```php
public disableStrictVariables(): mixed
```

***

### isStrictVariables

Checks if the strict_variables option is enabled.

```php
public isStrictVariables(): bool
```

**Return Value:**

true if strict_variables is enabled, false otherwise



***

### getCache

Gets the current cache implementation.

```php
public getCache(bool $original = true): \Twig\Cache\CacheInterface|string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$original` | **bool** | Whether to return the original cache option or the real cache instance |

**Return Value:**

A Twig\Cache\CacheInterface implementation, an absolute path to the compiled templates, or false to disable cache



***

### setCache

Sets the current cache implementation.

```php
public setCache(\Twig\Cache\CacheInterface|string|false $cache): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **
\Twig\Cache\CacheInterface&#124;string&#124;false** | A Twig\Cache\CacheInterface implementation,<br />an absolute path to the compiled templates,<br />or false to disable cache |

***

### getCacheFilename

Gets the cache filename for a given template.

```php
public getCacheFilename(string $name): string|false
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The template name |

**Return Value:**

The cache file name or false when caching is disabled



***

### getTemplateClass

Gets the template class associated with the given string.

```php
public getTemplateClass(string $name, int|null $index = null): string
```

The generated template class is based on the following parameters:

* The cache key for the given template;
* The currently enabled extensions;
* Whether the Twig C extension is available or not;
* PHP version;
* Twig version;
* Options with what environment was created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name for which to calculate the template class name |
| `$index` | **int&#124;null** | The index if it is an embedded template |

**Return Value:**

The template class name



***

### getTemplateClassPrefix

Gets the template class prefix.

```php
public getTemplateClassPrefix(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The template class prefix



***

### render

Renders a template.

```php
public render(string|\Twig\TemplateWrapper $name, array $context = []): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TemplateWrapper** | The template name |
| `$context` | **array** | An array of parameters to pass to the template |

**Return Value:**

The rendered template



***

### display

Displays a template.

```php
public display(string|\Twig\TemplateWrapper $name, array $context = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TemplateWrapper** | The template name |
| `$context` | **array** | An array of parameters to pass to the template |

***

### load

Loads a template.

```php
public load(string|\Twig\TemplateWrapper|\Twig\Template $name): \Twig\TemplateWrapper
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TemplateWrapper&#124;\Twig\Template** | The template name |

***

### createTemplate

Creates a template from source.

```php
public createTemplate(string $template, string $name = null): \Twig\TemplateWrapper
```

This method should not be used as a generic way to load templates.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **string** | The template source |
| `$name` | **string** | An optional name of the template to be used in error messages |

**Return Value:**

A template instance representing the given template name



***

### isTemplateFresh

Returns true if the template is still fresh.

```php
public isTemplateFresh(string $name, int $time): bool
```

Besides checking the loader for freshness information, this method also checks if the enabled extensions have not
changed.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The template name |
| `$time` | **int** | The last modification time of the cached template |

**Return Value:**

true if the template is fresh, false otherwise



***

### resolveTemplate

Tries to load a template consecutively from an array.

```php
public resolveTemplate(string|\Twig\Template|\Twig\TemplateWrapper|array $names): \Twig\TemplateWrapper|\Twig\Template
```

Similar to load() but it also accepts instances of \Twig\Template and \Twig\TemplateWrapper, and an array of templates
where each is tried to be loaded.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **
string&#124;\Twig\Template&#124;\Twig\TemplateWrapper&#124;array** | A template or an array of templates to try consecutively |

***

### clearTemplateCache

Clears the internal template cache.

```php
public clearTemplateCache(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### clearCacheFiles

Clears the template cache files on the filesystem.

```php
public clearCacheFiles(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getLexer

Gets the Lexer instance.

```php
public getLexer(): \Twig_LexerInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setLexer

```php
public setLexer(\Twig_LexerInterface $lexer): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lexer` | **\Twig_LexerInterface** |  |

***

### tokenize

Tokenizes a source code.

```php
public tokenize(string|\Twig\Source $source, string $name = null): \Twig\TokenStream
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string&#124;\Twig\Source** | The template source code |
| `$name` | **string** | The template name (deprecated) |

***

### getParser

Gets the Parser instance.

```php
public getParser(): \Twig_ParserInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setParser

```php
public setParser(\Twig_ParserInterface $parser): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig_ParserInterface** |  |

***

### parse

Converts a token stream to a node tree.

```php
public parse(\Twig\TokenStream $stream): \Twig\Node\ModuleNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Twig\TokenStream** |  |

***

### getCompiler

Gets the Compiler instance.

```php
public getCompiler(): \Twig_CompilerInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setCompiler

```php
public setCompiler(\Twig_CompilerInterface $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig_CompilerInterface** |  |

***

### compile

Compiles a node and returns the PHP code.

```php
public compile(\Twig_NodeInterface $node): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |

**Return Value:**

The compiled PHP source code



***

### compileSource

Compiles a template source code.

```php
public compileSource(string|\Twig\Source $source, string $name = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string&#124;\Twig\Source** | The template source code |
| `$name` | **string** | The template name (deprecated) |

**Return Value:**

The compiled PHP source code



***

### setLoader

```php
public setLoader(\Twig\Loader\LoaderInterface $loader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Twig\Loader\LoaderInterface** |  |

***

### getLoader

Gets the Loader instance.

```php
public getLoader(): \Twig\Loader\LoaderInterface
```

***

### setCharset

Sets the default template charset.

```php
public setCharset(string $charset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charset` | **string** | The default charset |

***

### getCharset

Gets the default template charset.

```php
public getCharset(): string
```

**Return Value:**

The default charset



***

### initRuntime

Initializes the runtime environment.

```php
public initRuntime(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### hasExtension

Returns true if the given extension is registered.

```php
public hasExtension(string $class): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The extension class name |

**Return Value:**

Whether the extension is registered or not



***

### addRuntimeLoader

Adds a runtime loader.

```php
public addRuntimeLoader(\Twig\RuntimeLoader\RuntimeLoaderInterface $loader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Twig\RuntimeLoader\RuntimeLoaderInterface** |  |

***

### getExtension

Gets an extension by class name.

```php
public getExtension(string $class): \Twig\Extension\ExtensionInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The extension class name |

***

### getRuntime

Returns the runtime implementation of a Twig element (filter/function/test).

```php
public getRuntime(string $class): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | A runtime class name |

**Return Value:**

The runtime implementation



***

### addExtension

```php
public addExtension(\Twig\Extension\ExtensionInterface $extension): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **\Twig\Extension\ExtensionInterface** |  |

***

### removeExtension

Removes an extension by name.

```php
public removeExtension(string $name): mixed
```

This method is deprecated and you should not use it.

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The extension name |

***

### setExtensions

Registers an array of extensions.

```php
public setExtensions(array $extensions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensions` | **array** | An array of extensions |

***

### getExtensions

Returns all registered extensions.

```php
public getExtensions(): \Twig\Extension\ExtensionInterface[]
```

**Return Value:**

An array of extensions (keys are for internal usage only and should not be relied on)



***

### addTokenParser

```php
public addTokenParser(\Twig\TokenParser\TokenParserInterface $parser): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig\TokenParser\TokenParserInterface** |  |

***

### addNodeVisitor

```php
public addNodeVisitor(\Twig\NodeVisitor\NodeVisitorInterface $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Twig\NodeVisitor\NodeVisitorInterface** |  |

***

### addFilter

Registers a Filter.

```php
public addFilter(string|\Twig\TwigFilter $name, \Twig_FilterInterface|\Twig\TwigFilter $filter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TwigFilter** | The filter name or a \Twig_SimpleFilter instance |
| `$filter` | **\Twig_FilterInterface&#124;\Twig\TwigFilter** |  |

***

### registerUndefinedFilterCallback

```php
public registerUndefinedFilterCallback(mixed $callable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |

***

### addTest

Registers a Test.

```php
public addTest(string|\Twig\TwigTest $name, \Twig_TestInterface|\Twig\TwigTest $test = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TwigTest** | The test name or a \Twig_SimpleTest instance |
| `$test` | **
\Twig_TestInterface&#124;\Twig\TwigTest** | A \Twig_TestInterface instance or a \Twig_SimpleTest instance |

***

### addFunction

Registers a Function.

```php
public addFunction(string|\Twig\TwigFunction $name, \Twig_FunctionInterface|\Twig\TwigFunction $function = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;\Twig\TwigFunction** | The function name or a \Twig_SimpleFunction instance |
| `$function` | **\Twig_FunctionInterface&#124;\Twig\TwigFunction** |  |

***

### registerUndefinedFunctionCallback

```php
public registerUndefinedFunctionCallback(mixed $callable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |

***

### addGlobal

Registers a Global.

```php
public addGlobal(string $name, mixed $value): mixed
```

New globals can be added before compiling or rendering a template; but after, you can only update existing globals.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The global name |
| `$value` | **mixed** | The global value |

***

### mergeGlobals

Merges a context with the defined globals.

```php
public mergeGlobals(array $context): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** | An array representing the context |

**Return Value:**

The context merged with the globals



***

### computeAlternatives

```php
public computeAlternatives(mixed $name, mixed $items): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$items` | **mixed** |  |

***

### writeCacheFile

```php
protected writeCacheFile(mixed $file, mixed $content): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$content` | **mixed** |  |

***

### updateOptionsHash

```php
private updateOptionsHash(): mixed
```

yxorP::get('REQUEST')
