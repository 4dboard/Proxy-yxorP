***

# BsdFinderTest

* Full name: `\Symfony\Component\Finder\Tests\BsdFinderTest`
* Parent class: [`\Symfony\Component\Finder\Tests\FinderTest`](./FinderTest.md)

## Methods

### testSymlinksNotResolved

```php
public testSymlinksNotResolved(): mixed
```

***

### testBackPathNotNormalized

```php
public testBackPathNotNormalized(): mixed
```

***

### buildFinder

```php
protected buildFinder(): mixed
```

***

## Inherited methods

### testCreate

```php
public testCreate(): mixed
```

***

### testDirectories

```php
public testDirectories(): mixed
```

***

### testFiles

```php
public testFiles(): mixed
```

***

### testRemoveTrailingSlash

```php
public testRemoveTrailingSlash(): mixed
```

***

### testSymlinksNotResolved

```php
public testSymlinksNotResolved(): mixed
```

***

### testBackPathNotNormalized

```php
public testBackPathNotNormalized(): mixed
```

***

### testDepth

```php
public testDepth(): mixed
```

***

### testName

```php
public testName(): mixed
```

***

### testNotName

```php
public testNotName(): mixed
```

***

### testRegexName

```php
public testRegexName(mixed $regex): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regex` | **mixed** |  |

***

### testSize

```php
public testSize(): mixed
```

***

### testDate

```php
public testDate(): mixed
```

***

### testExclude

```php
public testExclude(): mixed
```

***

### testIgnoreVCS

```php
public testIgnoreVCS(): mixed
```

***

### testIgnoreDotFiles

```php
public testIgnoreDotFiles(): mixed
```

***

### testSortByName

```php
public testSortByName(): mixed
```

***

### testSortByType

```php
public testSortByType(): mixed
```

***

### testSortByAccessedTime

```php
public testSortByAccessedTime(): mixed
```

***

### testSortByChangedTime

```php
public testSortByChangedTime(): mixed
```

***

### testSortByModifiedTime

```php
public testSortByModifiedTime(): mixed
```

***

### testSort

```php
public testSort(): mixed
```

***

### testFilter

```php
public testFilter(): mixed
```

***

### testFollowLinks

```php
public testFollowLinks(): mixed
```

***

### testIn

```php
public testIn(): mixed
```

***

### testInWithNonExistentDirectory

```php
public testInWithNonExistentDirectory(): mixed
```

***

### testInWithGlob

```php
public testInWithGlob(): mixed
```

***

### testInWithNonDirectoryGlob

```php
public testInWithNonDirectoryGlob(): mixed
```

***

### testInWithGlobBrace

```php
public testInWithGlobBrace(): mixed
```

***

### testGetIteratorWithoutIn

```php
public testGetIteratorWithoutIn(): mixed
```

***

### testGetIterator

```php
public testGetIterator(): mixed
```

***

### testRelativePath

```php
public testRelativePath(): mixed
```

***

### testRelativePathname

```php
public testRelativePathname(): mixed
```

***

### testAppendWithAFinder

```php
public testAppendWithAFinder(): mixed
```

***

### testAppendWithAnArray

```php
public testAppendWithAnArray(): mixed
```

***

### testAppendReturnsAFinder

```php
public testAppendReturnsAFinder(): mixed
```

***

### testAppendDoesNotRequireIn

```php
public testAppendDoesNotRequireIn(): mixed
```

***

### testCountDirectories

```php
public testCountDirectories(): mixed
```

***

### testCountFiles

```php
public testCountFiles(): mixed
```

***

### testCountWithoutIn

```php
public testCountWithoutIn(): mixed
```

***

### testContains

```php
public testContains(mixed $matchPatterns, mixed $noMatchPatterns, mixed $expected): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matchPatterns` | **mixed** |  |
| `$noMatchPatterns` | **mixed** |  |
| `$expected` | **mixed** |  |

***

### testContainsOnDirectory

```php
public testContainsOnDirectory(): mixed
```

***

### testNotContainsOnDirectory

```php
public testNotContainsOnDirectory(): mixed
```

***

### testMultipleLocations

Searching in multiple locations involves AppendIterator which does an unnecessary rewind which leaves FilterIterator
with inner FilesystemIterator in an invalid state.

```php
public testMultipleLocations(): mixed
```

**See Also:**

* https://bugs.php.net/68557 -

***

### testMultipleLocationsWithSubDirectories

Searching in multiple locations with sub directories involves AppendIterator which does an unnecessary rewind which
leaves FilterIterator with inner FilesystemIterator in an invalid state.

```php
public testMultipleLocationsWithSubDirectories(): mixed
```

**See Also:**

* https://bugs.php.net/68557 -

***

### testIteratorKeys

Iterator keys must be the file pathname.

```php
public testIteratorKeys(): mixed
```

***

### testRegexSpecialCharsLocationWithPathRestrictionContainingStartFlag

```php
public testRegexSpecialCharsLocationWithPathRestrictionContainingStartFlag(): mixed
```

***

### testAdaptersOrdering

```php
public testAdaptersOrdering(): mixed
```

***

### testAdaptersChaining

```php
public testAdaptersChaining(): mixed
```

***

### getContainsTestData

```php
public getContainsTestData(): mixed
```

***

### getRegexNameTestData

```php
public getRegexNameTestData(): mixed
```

***

### testPath

```php
public testPath(mixed $matchPatterns, mixed $noMatchPatterns, array $expected): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matchPatterns` | **mixed** |  |
| `$noMatchPatterns` | **mixed** |  |
| `$expected` | **array** |  |

***

### testAdapterSelection

```php
public testAdapterSelection(): mixed
```

***

### getTestPathData

```php
public getTestPathData(): mixed
```

***

### testAccessDeniedException

```php
public testAccessDeniedException(): mixed
```

***

### testIgnoredAccessDeniedException

```php
public testIgnoredAccessDeniedException(): mixed
```

***

### buildFinder

```php
protected buildFinder(): mixed
```

***

### setUpBeforeClass

```php
public static setUpBeforeClass(): mixed
```

* This method is **static**.

***

### tearDownAfterClass

```php
public static tearDownAfterClass(): mixed
```

* This method is **static**.

***

### toAbsolute

```php
protected static toAbsolute(mixed $files = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **mixed** |  |

***

### toAbsoluteFixtures

```php
protected static toAbsoluteFixtures(mixed $files): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **mixed** |  |

***

### assertIterator

```php
protected assertIterator(mixed $expected, \Traversable $iterator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$iterator` | **\Traversable** |  |

***

### assertOrderedIterator

```php
protected assertOrderedIterator(mixed $expected, \Traversable $iterator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$iterator` | **\Traversable** |  |

***

### assertOrderedIteratorForGroups

Same as assertOrderedIterator, but checks the order of groups of array elements.

```php
protected assertOrderedIteratorForGroups(mixed $expected, \Traversable $iterator): mixed
```

@param array $expected - an array of arrays. For any two subarrays $a and $b such that $a goes before $b in $expected,
the method asserts that any element of $a goes before any element of $b in the sequence generated by $iterator

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$iterator` | **\Traversable** |  |

***

### assertIteratorInForeach

Same as IteratorTestCase::assertIterator with foreach usage.

```php
protected assertIteratorInForeach(array $expected, \Traversable $iterator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **array** |  |
| `$iterator` | **\Traversable** |  |

***

### assertOrderedIteratorInForeach

Same as IteratorTestCase::assertOrderedIterator with foreach usage.

```php
protected assertOrderedIteratorInForeach(array $expected, \Traversable $iterator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **array** |  |
| `$iterator` | **\Traversable** |  |

yxorP::get('REQUEST')
