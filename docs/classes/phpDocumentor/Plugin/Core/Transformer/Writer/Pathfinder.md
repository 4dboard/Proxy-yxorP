***

# Pathfinder

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Pathfinder`

## Methods

### find

Combines the query and an object to retrieve a list of nodes that are to be used as node-point in a template.

```php
public find(object $object, string $query): \Traversable|array
```

This method interprets the provided query string and walks through the given object to find the correct element. This
method will silently fail if an invalid query was provided; in such a case the given object is returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |
| `$query` | **string** |  |

***

### walkObjectTree

Walks an object graph and/or array using a twig query string.

```php
private walkObjectTree(\Traversable|mixed $objectOrArray, string $query): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrArray` | **\Traversable&#124;mixed** |  |
| `$query` | **string** | A path to walk separated by dots, i.e. `namespace.namespaces`. |

yxorP::get('REQUEST')
