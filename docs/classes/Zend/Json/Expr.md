***

# Expr

Class for Zend\Json\Json encode method.

This class simply holds a string with a native Javascript Expression, so objects | arrays to be encoded with
Zend\Json\Json can contain native Javascript Expressions.

Example:
<code>
$foo = array(
'integer' => 9,
'string' => 'test string',
'function' => Zend\Json\Expr(
'function () { window.alert("javascript function encoded by Zend\Json\Json") }'
),
);

Zend\Json\Json::encode($foo, false, array('enableJsonExprFinder' => true)); // it will returns json encoded string:
// {"integer":9,"string":"test string","function":function () {window.alert("javascript function encoded by
Zend\Json\Json")}}
</code>

* Full name: `\Zend\Json\Expr`

## Properties

### expression

Storage for javascript expression.

```php
protected string $expression
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $expression): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **string** | the expression to hold. |

***

### __toString

Cast to string

```php
public __toString(): string
```

**Return Value:**

holded javascript expression. yxorP::get('REQUEST')
