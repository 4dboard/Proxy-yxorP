***

# Transformation

Class representing a single Transformation.



* Full name: `\phpDocumentor\Transformer\Transformation`



## Properties


### writer



```php
protected string $writer
```






***

### artifact



```php
protected string $artifact
```






***

### source



```php
protected string $source
```






***

### query



```php
protected string $query
```






***

### transformer



```php
protected \phpDocumentor\Transformer\Transformer $transformer
```






***

### parameters



```php
protected \phpDocumentor\Transformer\Template\Parameter[] $parameters
```






***

## Methods


### __construct

Constructs a new Transformation object and populates the required parameters.

```php
public __construct(string $query, string $writer, string $source, string $artifact): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | What information to use as datasource for the writer&#039;s source. |
| `$writer` | **string** | What type of transformation to apply (XSLT, PDF, Checkstyle etc). |
| `$source` | **string** | Which template or type of source to use. |
| `$artifact` | **string** | What is the filename of the result (relative to the generated root) |




***

### setQuery

Sets the query.

```php
public setQuery(string $query): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | Free-form string with writer-specific values. |




***

### getQuery

Returns the set query.

```php
public getQuery(): string
```











***

### setWriter

Sets the writer type and instantiates a writer.

```php
public setWriter(string $writer): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writer` | **string** | Name of writer to instantiate. |




***

### getWriter

Returns an instantiated writer object.

```php
public getWriter(): \phpDocumentor\Transformer\Writer\WriterAbstract|null
```











***

### setSource

Sets the source / type which the writer will use to generate artifacts from.

```php
public setSource(string $source): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | Free-form string with writer-specific meaning. |




***

### getSource

Returns the name of the source / type used in the transformation process.

```php
public getSource(): string
```











***

### getSourceAsPath

Returns the source as a path instead of a regular value.

```php
public getSourceAsPath(): string
```

This method applies the following rules to the value of $source:

1. if the template_path parameter is set and that combined with the
   source gives an existing file; return that.
2. if the value exists as a file (either relative to the current working
   directory or absolute), do a realpath and return it.
3. Otherwise prepend it with the phpDocumentor data folder, if that does
   not exist: throw an exception









***

### setArtifact

Filename of the resulting artifact relative to the root.

```php
public setArtifact(string $artifact): void
```

If the query results in a set of artifacts (multiple nodes / array);
then this string must contain an identifying variable as returned by the
writer.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artifact` | **string** | Name of artifact to generate; usually a filepath. |




***

### getArtifact

Returns the name of the artifact.

```php
public getArtifact(): string
```











***

### setParameters

Sets an array of parameters (key => value).

```php
public setParameters(\phpDocumentor\Transformer\Template\Parameter[] $parameters): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **\phpDocumentor\Transformer\Template\Parameter[]** | Associative multidimensional array containing<br />parameters for the Writer. |




***

### getParameters

Returns all parameters for this transformation.

```php
public getParameters(): \phpDocumentor\Transformer\Template\Parameter[]
```











***

### getParameter

Returns a specific parameter, or $default if none exists.

```php
public getParameter(string $name): \phpDocumentor\Transformer\Template\Parameter
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the parameter to return. |




***

### getParametersWithKey

Returns a specific parameter, or $default if none exists.

```php
public getParametersWithKey(string $name): \phpDocumentor\Transformer\Template\Parameter
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the parameter to return. |




***

### setTransformer

Sets the transformer on this transformation.

```php
public setTransformer(\phpDocumentor\Transformer\Transformer $transformer): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformer` | **\phpDocumentor\Transformer\Transformer** |  |




***

### getTransformer

Returns the transformer for this transformation.

```php
public getTransformer(): \phpDocumentor\Transformer\Transformer
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
