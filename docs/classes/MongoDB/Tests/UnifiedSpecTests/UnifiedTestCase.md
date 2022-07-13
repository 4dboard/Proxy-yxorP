***

# UnifiedTestCase

Unified test case model class.

This model corresponds to a single test case (i.e. element in "tests" array)
within a JSON object conforming to the unified test format's JSON schema. This test case may be executed by
UnifiedTestRunner::run().

* Full name: `\MongoDB\Tests\UnifiedSpecTests\UnifiedTestCase`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\IteratorAggregate`](../../../IteratorAggregate.md)
* This class is a **Final class**

**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/unified-test-format/unified-test-format.rst -

## Properties

### test

```php
private \stdClass $test
```

***

### schemaVersion

```php
private string $schemaVersion
```

***

### runOnRequirements

```php
private array|null $runOnRequirements
```

***

### createEntities

```php
private array|null $createEntities
```

***

### initialData

```php
private array|null $initialData
```

***

## Methods

### __construct

```php
private __construct(\stdClass $test, string $schemaVersion, ?array $runOnRequirements = null, ?array $createEntities = null, ?array $initialData = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\stdClass** |  |
| `$schemaVersion` | **string** |  |
| `$runOnRequirements` | **?array** |  |
| `$createEntities` | **?array** |  |
| `$initialData` | **?array** |  |

***

### getIterator

Return this object as arguments for UnifiedTestRunner::doTestCase().

```php
public getIterator(): \Traversable
```

This allows the UnifiedTest object to be used directly with the argument unpacking operator (i.e. "...").

**See Also:**

* https://www.php.net/manual/en/iteratoraggregate.getiterator.php -
  * https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list -

***

### fromFile

Yields UnifiedTestCase objects for a JSON file.

```php
public static fromFile(string $filename): \Generator
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

***

### fromJSON

Yields UnifiedTestCase objects for parsed JSON.

```php
public static fromJSON(\stdClass $json): \Generator
```

The top-level and test-level "description" fields will be concatenated and used as the key for each yielded value.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **\stdClass** |  |

***


***

