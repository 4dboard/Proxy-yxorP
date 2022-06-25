***

# MethodTagTest

Test class for \phpDocumentor\Reflection\DocBlock\Tag\MethodTag

* Full name: `\phpDocumentor\Reflection\DocBlock\Tag\MethodTagTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)

**See Also:**

* http://phpdoc.org -

## Methods

### testConstruct

```php
public testConstruct(string $signature, bool $valid, string $expected_name, string $expected_return, mixed $expected_isStatic, bool $paramCount, string $description): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **string** | The signature to test. |
| `$valid` | **bool** | Whether the given signature is expected to<br />be valid. |
| `$expected_name` | **string** | The method name that is expected from this<br />signature. |
| `$expected_return` | **string** | The return type that is expected from this<br />signature. |
| `$expected_isStatic` | **mixed** |  |
| `$paramCount` | **bool** | Number of parameters in the signature. |
| `$description` | **string** | The short description mentioned in the<br />signature. |

***

### getTestSignatures

```php
public getTestSignatures(): mixed
```

yxorP::get('REQUEST')
