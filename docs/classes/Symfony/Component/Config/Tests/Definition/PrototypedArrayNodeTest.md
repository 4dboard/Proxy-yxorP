***

# PrototypedArrayNodeTest

* Full name: `\Symfony\Component\Config\Tests\Definition\PrototypedArrayNodeTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)

## Methods

### testGetDefaultValueReturnsAnEmptyArrayForPrototypes

```php
public testGetDefaultValueReturnsAnEmptyArrayForPrototypes(): mixed
```

***

### testGetDefaultValueReturnsDefaultValueForPrototypes

```php
public testGetDefaultValueReturnsDefaultValueForPrototypes(): mixed
```

***

### testRemappedKeysAreUnset

```php
public testRemappedKeysAreUnset(): mixed
```

***

### testMappedAttributeKeyIsRemoved

Tests that when a key attribute is mapped, that key is removed from the array.

```php
public testMappedAttributeKeyIsRemoved(): mixed
```

<things>
        <option id="option1" value="foo">
        <option id="option2" value="bar">
    </things>

The above should finally be mapped to an array that looks like this
(because "id" is the key attribute).

    array(
        'things' => array(
            'option1' => 'foo',
            'option2' => 'bar',
        )
    )

***

### testMappedAttributeKeyNotRemoved

Tests the opposite of the testMappedAttributeKeyIsRemoved because the removal can be toggled with an option.

```php
public testMappedAttributeKeyNotRemoved(): mixed
```

***

### testAddDefaultChildren

```php
public testAddDefaultChildren(): mixed
```

***

### testDefaultChildrenWinsOverDefaultValue

```php
public testDefaultChildrenWinsOverDefaultValue(): mixed
```

***

### getPrototypeNodeWithDefaultChildren

```php
protected getPrototypeNodeWithDefaultChildren(): mixed
```

***

### testMappedAttributeKeyIsRemovedLeftValueOnly

Tests that when a key attribute is mapped, that key is removed from the array.

```php
public testMappedAttributeKeyIsRemovedLeftValueOnly(mixed $value, mixed $children, mixed $expected): mixed
```

And if only 'value' element is left in the array, it will replace its wrapper array.

    <things>
        <option id="option1" value="value1">
    </things>

The above should finally be mapped to an array that looks like this
(because "id" is the key attribute).

    array(
        'things' => array(
            'option1' => 'value1'
        )
    )

It's also possible to mix 'value-only' and 'non-value-only' elements in the array.

<things>
    <option id="option1" value="value1">
    <option id="option2" value="value2" foo="foo2">
</things>

The above should finally be mapped to an array as follows

array(
'things' => array(
'option1' => 'value1',
'option2' => array(
'value' => 'value2',
'foo' => 'foo2'
)
)
)

The 'value' element can also be ArrayNode:

<things>
    <option id="option1">
        <value>
           <foo>foo1</foo>
           <bar>bar1</bar>
        </value>
    </option>
</things>

The above should be finally be mapped to an array as follows

array(
'things' => array(
'option1' => array(
'foo' => 'foo1',
'bar' => 'bar1'
)
)
)

If using VariableNode for value node, it's also possible to mix different types of value nodes:

<things>
    <option id="option1">
        <value>
           <foo>foo1</foo>
           <bar>bar1</bar>
        </value>
    </option>
    <option id="option2" value="value2">
</things>

The above should be finally mapped to an array as follows

array(
'things' => array(
'option1' => array(
'foo' => 'foo1',
'bar' => 'bar1'
),
'option2' => 'value2'
)
)

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$children` | **mixed** |  |
| `$expected` | **mixed** |  |

***

### getDataForKeyRemovedLeftValueOnly

```php
public getDataForKeyRemovedLeftValueOnly(): mixed
```

yxorP::get('REQUEST')
