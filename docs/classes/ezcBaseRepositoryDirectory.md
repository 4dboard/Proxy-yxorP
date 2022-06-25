***

# ezcBaseRepositoryDirectory

Struct which defines a repository directory.

* Full name: `\ezcBaseRepositoryDirectory`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_INTERNAL`|public| |0|
|`TYPE_EXTERNAL`|public| |1|

## Properties

### type

The $type is one of the two TYPE_* constants defined in this class.

```php
public string $type
```

***

### basePath

The path to the configured repository.

```php
public string $basePath
```

***

### autoloadPath

The path to the autoload files.

```php
public string $autoloadPath
```

***

## Methods

### __construct

Constructs a new ezcBaseRepositoryDirectory of type $type with base path $basePath and autoload path $autoloadPath.

```php
public __construct(string $type, string $basePath, string $autoloadPath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$basePath` | **string** |  |
| `$autoloadPath` | **string** |  |

***

### __set_state

Returns a new instance of this class with the data specified by $array.

```php
public static __set_state(array $array): \ezcBaseRepositoryDirectory
```

$array contains all the data members of this class in the form:
array('member_name'=>value).

__set_state makes this class exportable with var_export. var_export() generates code, that calls this method when it is
parsed with PHP.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |

yxorP::get('REQUEST')
