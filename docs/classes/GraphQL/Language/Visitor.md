***

# Visitor

Utility for efficient AST traversal and modification.

`visit()` will walk through an AST using a depth first traversal, calling
the visitor's enter function at each node in the traversal, and calling the
leave function after visiting that node and all of it's child nodes.

By returning different values from the enter and leave functions, the
behavior of the visitor can be altered, including skipping over a sub-tree of
the AST (by returning false), editing the AST by returning a value or null
to remove the value, or to stop the whole traversal by returning BREAK.

When using `visit()` to edit an AST, the original AST will not be modified, and
a new version of the AST with the changes applied will be returned from the
visit function.

    $editedAST = Visitor::visit($ast, [
      'enter' => function ($node, $key, $parent, $path, $ancestors) {
        // return
        //   null: no action
        //   Visitor::skipNode(): skip visiting this node
        //   Visitor::stop(): stop visiting altogether
        //   Visitor::removeNode(): delete this node
        //   any value: replace this node with the returned value
      },
      'leave' => function ($node, $key, $parent, $path, $ancestors) {
        // return
        //   null: no action
        //   Visitor::stop(): stop visiting altogether
        //   Visitor::removeNode(): delete this node
        //   any value: replace this node with the returned value
      }
    ]);

Alternatively to providing enter() and leave() functions, a visitor can
instead provide functions named the same as the [kinds of AST nodes](reference.md#graphqllanguageastnodekind),
or enter/leave visitors at a named key, leading to four permutations of
visitor API:

1) Named visitors triggered when entering a node a specific kind.

   Visitor::visit($ast, [
   'Kind' => function ($node) {
   // enter the "Kind" node
   }
   ]);

2) Named visitors that trigger upon entering and leaving a node of
   a specific kind.

   Visitor::visit($ast, [
   'Kind' => [
   'enter' => function ($node) {
   // enter the "Kind" node
   }
   'leave' => function ($node) {
   // leave the "Kind" node
   }
   ]
   ]);

3) Generic visitors that trigger upon entering and leaving any node.

   Visitor::visit($ast, [
   'enter' => function ($node) {
   // enter any node
   },
   'leave' => function ($node) {
   // leave any node
   }
   ]);

4) Parallel visitors for entering and leaving nodes of a specific kind.

   Visitor::visit($ast, [
   'enter' => [
   'Kind' => function($node) {
   // enter the "Kind" node
   }
   },
   'leave' => [
   'Kind' => function ($node) {
   // leave the "Kind" node
   }
   ]
   ]);

* Full name: `\GraphQL\Language\Visitor`

## Properties

### visitorKeys

```php
public static string[][] $visitorKeys
```

* This property is **static**.

***

## Methods

### visit

Visit the AST (see class description for details)

```php
public static visit(\GraphQL\Language\AST\Node|\ArrayObject|\stdClass $root, callable[] $visitor, array|null $keyMap = null): \GraphQL\Language\AST\Node|mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **\GraphQL\Language\AST\Node&#124;\ArrayObject&#124;\stdClass** |  |
| `$visitor` | **callable[]** |  |
| `$keyMap` | **array&#124;null** |  |

***

### stop

Returns marker for visitor break

```php
public static stop(): \GraphQL\Language\VisitorOperation
```

* This method is **static**.

***

### skipNode

Returns marker for skipping current node

```php
public static skipNode(): \GraphQL\Language\VisitorOperation
```

* This method is **static**.

***

### removeNode

Returns marker for removing a node

```php
public static removeNode(): \GraphQL\Language\VisitorOperation
```

* This method is **static**.

***

### visitInParallel

```php
public static visitInParallel(callable[][] $visitors): array&lt;string,callable&gt;
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitors` | **callable[][]** |  |

***

### visitWithTypeInfo

Creates a new visitor instance which maintains a provided TypeInfo instance
along with visiting visitor.

```php
public static visitWithTypeInfo(\GraphQL\Utils\TypeInfo $typeInfo, mixed $visitor): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeInfo` | **\GraphQL\Utils\TypeInfo** |  |
| `$visitor` | **mixed** |  |

***

### getVisitFn

```php
public static getVisitFn(callable[]|null $visitor, string $kind, bool $isLeaving): ?callable
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **callable[]&#124;null** |  |
| `$kind` | **string** |  |
| `$isLeaving` | **bool** |  |

***


***

