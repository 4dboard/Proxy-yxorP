***

# Context

The context in which a DocBlock occurs.



* Full name: `\phpDocumentor\Reflection\DocBlock\Context`

**See Also:**

* http://phpdoc.org - 



## Properties


### namespace



```php
protected string $namespace
```






***

### namespace_aliases



```php
protected array $namespace_aliases
```






***

### lsen



```php
protected string $lsen
```






***

## Methods


### __construct

Cteates a new context.

```php
public __construct(string $namespace = &#039;&#039;, array $namespace_aliases = array(), string $lsen = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | The namespace where this DocBlock<br />resides in. |
| `$namespace_aliases` | **array** | List of namespace aliases =&gt; Fully<br />Qualified Namespace. |
| `$lsen` | **string** | Name of the structural element, within<br />the namespace. |




***

### getNamespace



```php
public getNamespace(): string
```









**Return Value:**

The namespace where this DocBlock resides in.



***

### getNamespaceAliases



```php
public getNamespaceAliases(): array
```









**Return Value:**

List of namespace aliases => Fully Qualified Namespace.



***

### getLSEN

Returns the Local Structural Element Name.

```php
public getLSEN(): string
```









**Return Value:**

Name of the structural element, within the namespace.



***

### setNamespace

Sets a new namespace.

```php
public setNamespace(string $namespace): $this
```

Sets a new namespace for the context. Leading and trailing slashes are
trimmed, and the keywords "global" and "default" are treated as aliases
to no namespace.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | The new namespace to set. |




***

### setNamespaceAliases

Sets the namespace aliases, replacing all previous ones.

```php
public setNamespaceAliases(array $namespace_aliases): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace_aliases` | **array** | List of namespace aliases =&gt; Fully<br />Qualified Namespace. |




***

### setNamespaceAlias

Adds a namespace alias to the context.

```php
public setNamespaceAlias(string $alias, string $fqnn): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** | The alias name (the part after &quot;as&quot;, or the last<br />part of the Fully Qualified Namespace Name) to add. |
| `$fqnn` | **string** | The Fully Qualified Namespace Name for this alias.<br />Any form of leading/trailing slashes are accepted, but what will be<br />stored is a name, prefixed with a slash, and no trailing slash. |




***

### setLSEN

Sets a new Local Structural Element Name.

```php
public setLSEN(string $lsen): $this
```

Sets a new Local Structural Element Name. A local name also contains
punctuation determining the kind of structural element (e.g. trailing "("
and ")" for functions and methods).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lsen` | **string** | The new local name of a structural element. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
