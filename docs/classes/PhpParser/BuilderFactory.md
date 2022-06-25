***

# BuilderFactory

The following methods use reserved keywords, so their implementation is defined with an underscore and made available
with the reserved name through __call() magic.

* Full name: `\PhpParser\BuilderFactory`

## Methods

### _namespace

Creates a namespace builder.

```php
protected _namespace(null|string|\PhpParser\Node\Name $name): \PhpParser\Builder\Namespace_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **null&#124;string&#124;\PhpParser\Node\Name** | Name of the namespace |

**Return Value:**

The created namespace builder



***

### _class

Creates a class builder.

```php
protected _class(string $name): \PhpParser\Builder\Class_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the class |

**Return Value:**

The created class builder



***

### _interface

Creates an interface builder.

```php
protected _interface(string $name): \PhpParser\Builder\Interface_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the interface |

**Return Value:**

The created interface builder



***

### _trait

Creates a trait builder.

```php
protected _trait(string $name): \PhpParser\Builder\Trait_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the trait |

**Return Value:**

The created trait builder



***

### method

Creates a method builder.

```php
public method(string $name): \PhpParser\Builder\Method
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the method |

**Return Value:**

The created method builder



***

### param

Creates a parameter builder.

```php
public param(string $name): \PhpParser\Builder\Param
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the parameter |

**Return Value:**

The created parameter builder



***

### property

Creates a property builder.

```php
public property(string $name): \PhpParser\Builder\Property
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the property |

**Return Value:**

The created property builder



***

### _function

Creates a function builder.

```php
protected _function(string $name): \PhpParser\Builder\Function_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the function |

**Return Value:**

The created function builder



***

### _use

Creates a namespace/class use builder.

```php
protected _use(mixed $name): \PhpParser\Builder\Use_
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

**Return Value:**

The create use builder



***

### __call

```php
public __call(mixed $name, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$args` | **array** |  |

yxorP::get('REQUEST')
