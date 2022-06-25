***

# ArrayConverter

ArrayConverter generates tree like structure from a message catalogue.

e.g. this
'foo.bar1' => 'test1',
'foo.bar2' => 'test2' converts to follows:
foo:
bar1: test1 bar2: test2.

* Full name: `\Symfony\Component\Translation\Util\ArrayConverter`

## Methods

### expandToTree

Converts linear messages array to tree-like array.

```php
public static expandToTree(array $messages): array
```

For example this rray('foo.bar' => 'value') will be converted to array('foo' => array('bar' => 'value')).

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **array** | Linear messages array |

**Return Value:**

Tree-like messages array



***

### getElementByPath

```php
private static getElementByPath(array& $tree, array $parts): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tree` | **array** |  |
| `$parts` | **array** |  |

***

### cancelExpand

```php
private static cancelExpand(array& $tree, mixed $prefix, array $node): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tree` | **array** |  |
| `$prefix` | **mixed** |  |
| `$node` | **array** |  |

yxorP::get('REQUEST')
