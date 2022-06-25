***

# AreAllArgumentsValid

* Full name: `\phpDocumentor\Plugin\Core\Descriptor\Validator\Functions\AreAllArgumentsValid`

## Methods

### validate

Validates whether the given Reflector's arguments match the business rules of phpDocumentor.

```php
public validate(\phpDocumentor\Reflection\BaseReflector $element): \phpDocumentor\Descriptor\Validator\Error|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Reflection\BaseReflector** |  |

***

### validateArguments

Returns an error if the given Reflector's arguments do not match expectations.

```php
protected validateArguments(\phpDocumentor\Reflection\FunctionReflector $element): \phpDocumentor\Descriptor\Validator\Error|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Reflection\FunctionReflector** |  |

***

### isArgumentInDocBlock

Validates whether an argument is mentioned in the docblock.

```php
protected isArgumentInDocBlock(int $index, \phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument, \phpDocumentor\Reflection\BaseReflector $element, \phpDocumentor\Reflection\DocBlock\Tag[] $params): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** | The position in the argument listing. |
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** | The argument itself. |
| `$element` | **\phpDocumentor\Reflection\BaseReflector** |  |
| `$params` | **\phpDocumentor\Reflection\DocBlock\Tag[]** | The list of param tags to validate against. |

**Return Value:**

whether an issue occurred.



***

### doesArgumentNameMatchParam

Validates whether the name of the argument is the same as that of the param tag.

```php
protected doesArgumentNameMatchParam(\phpDocumentor\Reflection\DocBlock\Tag\ParamTag $param, \phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument, \phpDocumentor\Reflection\BaseReflector $element): \phpDocumentor\Descriptor\Validator\Error|null
```

If the param tag does not contain a name then this method will set it based on the argument.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **\phpDocumentor\Reflection\DocBlock\Tag\ParamTag** | param to validate with. |
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** | Argument to validate against. |
| `$element` | **\phpDocumentor\Reflection\BaseReflector** |  |

**Return Value:**

whether an issue occurred



***

### doesArgumentTypehintMatchParam

Checks the typehint of the argument versus the @param tag.

```php
protected doesArgumentTypehintMatchParam(\phpDocumentor\Reflection\DocBlock\Tag\ParamTag $param, \phpDocumentor\Reflection\FunctionReflector\ArgumentReflector $argument, \phpDocumentor\Reflection\BaseReflector $element): \phpDocumentor\Descriptor\Validator\Error|null
```

If the argument has no typehint we do not check anything. When multiple type are given then the typehint needs to be one
of them.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **\phpDocumentor\Reflection\DocBlock\Tag\ParamTag** |  |
| `$argument` | **\phpDocumentor\Reflection\FunctionReflector\ArgumentReflector** |  |
| `$element` | **\phpDocumentor\Reflection\BaseReflector** |  |

yxorP::get('REQUEST')
