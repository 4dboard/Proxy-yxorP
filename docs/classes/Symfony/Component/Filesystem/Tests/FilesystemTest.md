***

# FilesystemTest

Test class for Filesystem.

* Full name: `\Symfony\Component\Filesystem\Tests\FilesystemTest`
* Parent class: [`\Symfony\Component\Filesystem\Tests\FilesystemTestCase`](./FilesystemTestCase.md)

## Methods

### testCopyCreatesNewFile

```php
public testCopyCreatesNewFile(): mixed
```

***

### testCopyFails

```php
public testCopyFails(): mixed
```

***

### testCopyUnreadableFileFails

```php
public testCopyUnreadableFileFails(): mixed
```

***

### testCopyOverridesExistingFileIfModified

```php
public testCopyOverridesExistingFileIfModified(): mixed
```

***

### testCopyDoesNotOverrideExistingFileByDefault

```php
public testCopyDoesNotOverrideExistingFileByDefault(): mixed
```

***

### testCopyOverridesExistingFileIfForced

```php
public testCopyOverridesExistingFileIfForced(): mixed
```

***

### testCopyWithOverrideWithReadOnlyTargetFails

```php
public testCopyWithOverrideWithReadOnlyTargetFails(): mixed
```

***

### testCopyCreatesTargetDirectoryIfItDoesNotExist

```php
public testCopyCreatesTargetDirectoryIfItDoesNotExist(): mixed
```

***

### testCopyForOriginUrlsAndExistingLocalFileDefaultsToCopy

```php
public testCopyForOriginUrlsAndExistingLocalFileDefaultsToCopy(): mixed
```

***

### testMkdirCreatesDirectoriesRecursively

```php
public testMkdirCreatesDirectoriesRecursively(): mixed
```

***

### testMkdirCreatesDirectoriesFromArray

```php
public testMkdirCreatesDirectoriesFromArray(): mixed
```

***

### testMkdirCreatesDirectoriesFromTraversableObject

```php
public testMkdirCreatesDirectoriesFromTraversableObject(): mixed
```

***

### testMkdirCreatesDirectoriesFails

```php
public testMkdirCreatesDirectoriesFails(): mixed
```

***

### testTouchCreatesEmptyFile

```php
public testTouchCreatesEmptyFile(): mixed
```

***

### testTouchFails

```php
public testTouchFails(): mixed
```

***

### testTouchCreatesEmptyFilesFromArray

```php
public testTouchCreatesEmptyFilesFromArray(): mixed
```

***

### testTouchCreatesEmptyFilesFromTraversableObject

```php
public testTouchCreatesEmptyFilesFromTraversableObject(): mixed
```

***

### testRemoveCleansFilesAndDirectoriesIteratively

```php
public testRemoveCleansFilesAndDirectoriesIteratively(): mixed
```

***

### testRemoveCleansArrayOfFilesAndDirectories

```php
public testRemoveCleansArrayOfFilesAndDirectories(): mixed
```

***

### testRemoveCleansTraversableObjectOfFilesAndDirectories

```php
public testRemoveCleansTraversableObjectOfFilesAndDirectories(): mixed
```

***

### testRemoveIgnoresNonExistingFiles

```php
public testRemoveIgnoresNonExistingFiles(): mixed
```

***

### testRemoveCleansInvalidLinks

```php
public testRemoveCleansInvalidLinks(): mixed
```

***

### testFilesExists

```php
public testFilesExists(): mixed
```

***

### testFilesExistsFails

```php
public testFilesExistsFails(): mixed
```

***

### testFilesExistsTraversableObjectOfFilesAndDirectories

```php
public testFilesExistsTraversableObjectOfFilesAndDirectories(): mixed
```

***

### testFilesNotExistsTraversableObjectOfFilesAndDirectories

```php
public testFilesNotExistsTraversableObjectOfFilesAndDirectories(): mixed
```

***

### testInvalidFileNotExists

```php
public testInvalidFileNotExists(): mixed
```

***

### testChmodChangesFileMode

```php
public testChmodChangesFileMode(): mixed
```

***

### testChmodWrongMod

```php
public testChmodWrongMod(): mixed
```

***

### testChmodRecursive

```php
public testChmodRecursive(): mixed
```

***

### testChmodAppliesUmask

```php
public testChmodAppliesUmask(): mixed
```

***

### testChmodChangesModeOfArrayOfFiles

```php
public testChmodChangesModeOfArrayOfFiles(): mixed
```

***

### testChmodChangesModeOfTraversableFileObject

```php
public testChmodChangesModeOfTraversableFileObject(): mixed
```

***

### testChmodChangesZeroModeOnSubdirectoriesOnRecursive

```php
public testChmodChangesZeroModeOnSubdirectoriesOnRecursive(): mixed
```

***

### testChown

```php
public testChown(): mixed
```

***

### testChownRecursive

```php
public testChownRecursive(): mixed
```

***

### testChownSymlink

```php
public testChownSymlink(): mixed
```

***

### testChownSymlinkFails

```php
public testChownSymlinkFails(): mixed
```

***

### testChownFail

```php
public testChownFail(): mixed
```

***

### testChgrp

```php
public testChgrp(): mixed
```

***

### testChgrpRecursive

```php
public testChgrpRecursive(): mixed
```

***

### testChgrpSymlink

```php
public testChgrpSymlink(): mixed
```

***

### testChgrpSymlinkFails

```php
public testChgrpSymlinkFails(): mixed
```

***

### testChgrpFail

```php
public testChgrpFail(): mixed
```

***

### testRename

```php
public testRename(): mixed
```

***

### testRenameThrowsExceptionIfTargetAlreadyExists

```php
public testRenameThrowsExceptionIfTargetAlreadyExists(): mixed
```

***

### testRenameOverwritesTheTargetIfItAlreadyExists

```php
public testRenameOverwritesTheTargetIfItAlreadyExists(): mixed
```

***

### testRenameThrowsExceptionOnError

```php
public testRenameThrowsExceptionOnError(): mixed
```

***

### testSymlink

```php
public testSymlink(): mixed
```

***

### testRemoveSymlink

```php
public testRemoveSymlink(): mixed
```

***

### testSymlinkIsOverwrittenIfPointsToDifferentTarget

```php
public testSymlinkIsOverwrittenIfPointsToDifferentTarget(): mixed
```

***

### testSymlinkIsNotOverwrittenIfAlreadyCreated

```php
public testSymlinkIsNotOverwrittenIfAlreadyCreated(): mixed
```

***

### testSymlinkCreatesTargetDirectoryIfItDoesNotExist

```php
public testSymlinkCreatesTargetDirectoryIfItDoesNotExist(): mixed
```

***

### testMakePathRelative

```php
public testMakePathRelative(mixed $endPath, mixed $startPath, mixed $expectedPath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endPath` | **mixed** |  |
| `$startPath` | **mixed** |  |
| `$expectedPath` | **mixed** |  |

***

### providePathsForMakePathRelative

```php
public providePathsForMakePathRelative(): array
```

***

### testMirrorCopiesFilesAndDirectoriesRecursively

```php
public testMirrorCopiesFilesAndDirectoriesRecursively(): mixed
```

***

### testMirrorCreatesEmptyDirectory

```php
public testMirrorCreatesEmptyDirectory(): mixed
```

***

### testMirrorCopiesLinks

```php
public testMirrorCopiesLinks(): mixed
```

***

### testMirrorCopiesLinkedDirectoryContents

```php
public testMirrorCopiesLinkedDirectoryContents(): mixed
```

***

### testMirrorCopiesRelativeLinkedContents

```php
public testMirrorCopiesRelativeLinkedContents(): mixed
```

***

### testIsAbsolutePath

```php
public testIsAbsolutePath(mixed $path, mixed $expectedResult): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$expectedResult` | **mixed** |  |

***

### providePathsForIsAbsolutePath

```php
public providePathsForIsAbsolutePath(): array
```

***

### testTempnam

```php
public testTempnam(): mixed
```

***

### testTempnamWithFileScheme

```php
public testTempnamWithFileScheme(): mixed
```

***

### testTempnamWithMockScheme

```php
public testTempnamWithMockScheme(): mixed
```

***

### testTempnamWithZlibSchemeFails

```php
public testTempnamWithZlibSchemeFails(): mixed
```

***

### testTempnamWithPHPTempSchemeFails

```php
public testTempnamWithPHPTempSchemeFails(): mixed
```

***

### testTempnamWithPharSchemeFails

```php
public testTempnamWithPharSchemeFails(): mixed
```

***

### testTempnamWithHTTPSchemeFails

```php
public testTempnamWithHTTPSchemeFails(): mixed
```

***

### testTempnamOnUnwritableFallsBackToSysTmp

```php
public testTempnamOnUnwritableFallsBackToSysTmp(): mixed
```

***

### testDumpFile

```php
public testDumpFile(): mixed
```

***

### testDumpFileOverwritesAnExistingFile

```php
public testDumpFileOverwritesAnExistingFile(): mixed
```

***

### testDumpFileWithFileScheme

```php
public testDumpFileWithFileScheme(): mixed
```

***

### testDumpFileWithZlibScheme

```php
public testDumpFileWithZlibScheme(): mixed
```

***

### testCopyShouldKeepExecutionPermission

```php
public testCopyShouldKeepExecutionPermission(): mixed
```

***

## Inherited methods

### setUpBeforeClass

```php
public static setUpBeforeClass(): mixed
```

* This method is **static**.

***

### setUp

```php
protected setUp(): mixed
```

***

### tearDown

```php
protected tearDown(): mixed
```

***

### assertFilePermissions

```php
protected assertFilePermissions(int $expectedFilePerms, string $filePath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedFilePerms` | **int** | expected file permissions as three digits (i.e. 755) |
| `$filePath` | **string** |  |

***

### getFileOwner

```php
protected getFileOwner(mixed $filepath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filepath` | **mixed** |  |

***

### getFileGroup

```php
protected getFileGroup(mixed $filepath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filepath` | **mixed** |  |

***

### markAsSkippedIfSymlinkIsMissing

```php
protected markAsSkippedIfSymlinkIsMissing(mixed $relative = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relative` | **mixed** |  |

***

### markAsSkippedIfChmodIsMissing

```php
protected markAsSkippedIfChmodIsMissing(): mixed
```

***

### markAsSkippedIfPosixIsMissing

```php
protected markAsSkippedIfPosixIsMissing(): mixed
```

yxorP::get('REQUEST')
