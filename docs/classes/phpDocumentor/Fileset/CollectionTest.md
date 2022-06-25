***

# CollectionTest

Test case for Collection class.

* Full name: `\phpDocumentor\Fileset\CollectionTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../PHPUnit_Framework_TestCase.md)

**See Also:**

* http://phpdoc.org -

## Properties

### fixture

```php
protected \phpDocumentor\Fileset\Collection $fixture
```

***

## Methods

### setUp

```php
protected setUp(): mixed
```

***

### getNameOfDataDir

Get the pathed name of the test suite's "data" directory.

```php
protected getNameOfDataDir(): string
```

The path includes a trailing directory separator.









***

### getCountOfDataDirFiles

Get a count of the files that exist in the test suite's "data" directory.

```php
protected getCountOfDataDirFiles(): int
```

***

### testConstructorSucceeds

```php
public testConstructorSucceeds(): mixed
```

***

### testSetIgnorePatternsAcceptsValidIgnorePattern

```php
public testSetIgnorePatternsAcceptsValidIgnorePattern(): mixed
```

***

### testSetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenAtOnce

```php
public testSetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenAtOnce(): mixed
```

***

### testSetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenSeparately

```php
public testSetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenSeparately(): mixed
```

***

### testGetIgnorePatternsAcceptsValidIgnorePattern

```php
public testGetIgnorePatternsAcceptsValidIgnorePattern(): mixed
```

***

### testGetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenAtOnce

```php
public testGetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenAtOnce(): mixed
```

***

### testGetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenSeparately

```php
public testGetIgnorePatternsAcceptsMultipleValidIgnorePatternsGivenSeparately(): mixed
```

***

### testSetAllowedExtensionsAcceptsEmptyArray

```php
public testSetAllowedExtensionsAcceptsEmptyArray(): mixed
```

***

### testSetAllowedExtensionsAcceptsSimpleArray

```php
public testSetAllowedExtensionsAcceptsSimpleArray(): mixed
```

***

### testSetAllowedExtensionsAcceptsAssociativeArray

```php
public testSetAllowedExtensionsAcceptsAssociativeArray(): mixed
```

***

### testSetAllowedExtensionsAllowsMultipleCalls

```php
public testSetAllowedExtensionsAllowsMultipleCalls(): mixed
```

***

### testAddAllowedExtensionAcceptsEmptyString

```php
public testAddAllowedExtensionAcceptsEmptyString(): mixed
```

***

### testAddAllowedExtensionAcceptsSingleString

```php
public testAddAllowedExtensionAcceptsSingleString(): mixed
```

***

### testAddAllowedExtensionAllowsMultipleCalls

```php
public testAddAllowedExtensionAllowsMultipleCalls(): mixed
```

***

### testAddDirectoriesWhenGivenEmptyArrayDoesNothing

```php
public testAddDirectoriesWhenGivenEmptyArrayDoesNothing(): mixed
```

***

### testAddDirectoriesWhenGivenOnePathSucceeds

```php
public testAddDirectoriesWhenGivenOnePathSucceeds(): mixed
```

***

### testAddDirectoriesWhenGivenTheSamePathTwiceIsOk

```php
public testAddDirectoriesWhenGivenTheSamePathTwiceIsOk(): mixed
```

***

### testAddDirectoriesWhenGivenManyPathsSucceeds

```php
public testAddDirectoriesWhenGivenManyPathsSucceeds(): mixed
```

***

### testAddDirectoriesWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames

```php
public testAddDirectoriesWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames(): mixed
```

***

### testAddDirectoryCanSeePharContents

```php
public testAddDirectoryCanSeePharContents(): mixed
```

***

### testAddDirectoryCanSeeDirectoryContents

```php
public testAddDirectoryCanSeeDirectoryContents(): mixed
```

***

### testAddDirectoryWhenAllowedExtensionsHidesEverything

```php
public testAddDirectoryWhenAllowedExtensionsHidesEverything(): mixed
```

***

### testAddDirectoryWhenIgnorePatternHidesEverything

```php
public testAddDirectoryWhenIgnorePatternHidesEverything(): mixed
```

***

### testAddDirectoryWhenIgnorePatternHidesSomething

```php
public testAddDirectoryWhenIgnorePatternHidesSomething(): mixed
```

***

### testAddDirectoryWhenFollowSymlinksIsSet

```php
public testAddDirectoryWhenFollowSymlinksIsSet(): mixed
```

***

### testAddFilesWhenGivenEmptyArrayDoesNothing

```php
public testAddFilesWhenGivenEmptyArrayDoesNothing(): mixed
```

***

### testAddFilesWhenGivenOnePathSucceeds

```php
public testAddFilesWhenGivenOnePathSucceeds(): mixed
```

***

### testAddFilesWhenGivenTheSamePathTwiceIsOk

```php
public testAddFilesWhenGivenTheSamePathTwiceIsOk(): mixed
```

***

### testAddFilesWhenGivenManyPathsSucceeds

```php
public testAddFilesWhenGivenManyPathsSucceeds(): mixed
```

***

### testAddFilesWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames

```php
public testAddFilesWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames(): mixed
```

***

### testAddFileWhenGivenEmptyStringThrowsException

```php
public testAddFileWhenGivenEmptyStringThrowsException(): mixed
```

***

### testAddFileWhenGivenOnePathSucceeds

```php
public testAddFileWhenGivenOnePathSucceeds(): mixed
```

***

### testAddFileWhenGivenTheSamePathTwiceIsOk

```php
public testAddFileWhenGivenTheSamePathTwiceIsOk(): mixed
```

***

### testAddFileWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames

```php
public testAddFileWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames(): mixed
```

***

### testGetGlobbedPathsWhenGivenEmptyStringThrowsException

```php
public testGetGlobbedPathsWhenGivenEmptyStringThrowsException(): mixed
```

***

### testGetGlobbedPathsWhenGivenOnePathSucceeds

```php
public testGetGlobbedPathsWhenGivenOnePathSucceeds(): mixed
```

***

### testGetGlobbedPathsWhenGivenTheSamePathTwiceIsOk

```php
public testGetGlobbedPathsWhenGivenTheSamePathTwiceIsOk(): mixed
```

***

### testGetGlobbedPathsWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames

```php
public testGetGlobbedPathsWhenGivenTheSamePathTwiceDoesNotResultInDuplicatedFilenames(): mixed
```

***

### testGetFilenamesCanSeePharContents

```php
public testGetFilenamesCanSeePharContents(): mixed
```

***

### testGetFilenamesCanSeeDirectoryContents

```php
public testGetFilenamesCanSeeDirectoryContents(): mixed
```

***

### testGetFilenamesWhenIgnorePatternHidesEverything

```php
public testGetFilenamesWhenIgnorePatternHidesEverything(): mixed
```

***

### testGetFilenamesWhenIgnorePatternHidesSomething

```php
public testGetFilenamesWhenIgnorePatternHidesSomething(): mixed
```

***

### testGetProjectRootWhenNothingHasYetBeenAddedReturnsRootSlash

```php
public testGetProjectRootWhenNothingHasYetBeenAddedReturnsRootSlash(): mixed
```

***

### testGetProjectRootWhenOneDatafileWasAddedReturnsDataFolder

```php
public testGetProjectRootWhenOneDatafileWasAddedReturnsDataFolder(): mixed
```

***

### testGetProjectRootWhenTwoDatafilesWereAddedReturnsDataFolder

```php
public testGetProjectRootWhenTwoDatafilesWereAddedReturnsDataFolder(): mixed
```

***

### testGetProjectRootWhenTwoFilesAreApart

```php
public testGetProjectRootWhenTwoFilesAreApart(): mixed
```

***

### testGetProjectRootWhenTwoFilesAreVeryFarApart

```php
public testGetProjectRootWhenTwoFilesAreVeryFarApart(): mixed
```

***

### testSetIgnoreHiddenGivenFalse

```php
public testSetIgnoreHiddenGivenFalse(): mixed
```

***

### testSetIgnoreHiddenGivenTrue

```php
public testSetIgnoreHiddenGivenTrue(): mixed
```

***

### testGetIgnoreHiddenGivenFalse

```php
public testGetIgnoreHiddenGivenFalse(): mixed
```

***

### testGetIgnoreHiddenGivenTrue

```php
public testGetIgnoreHiddenGivenTrue(): mixed
```

***

### testSetFollowSymlinksGivenFalse

```php
public testSetFollowSymlinksGivenFalse(): mixed
```

***

### testSetFollowSymlinksGivenTrue

```php
public testSetFollowSymlinksGivenTrue(): mixed
```

***

### testGetFollowSymlinksGivenFalse

```php
public testGetFollowSymlinksGivenFalse(): mixed
```

***

### testGetFollowSymlinksGivenTrue

```php
public testGetFollowSymlinksGivenTrue(): mixed
```

yxorP::get('REQUEST')
