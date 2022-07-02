***

# Bucket

Bucket provides a public API for interacting with the GridFS files and chunks
collections.



* Full name: `\MongoDB\GridFS\Bucket`



## Properties


### defaultBucketName



```php
private static string $defaultBucketName
```



* This property is **static**.


***

### defaultChunkSizeBytes



```php
private static int $defaultChunkSizeBytes
```



* This property is **static**.


***

### defaultTypeMap



```php
private static array $defaultTypeMap
```



* This property is **static**.


***

### streamWrapperProtocol



```php
private static string $streamWrapperProtocol
```



* This property is **static**.


***

### collectionWrapper



```php
private \MongoDB\GridFS\CollectionWrapper $collectionWrapper
```






***

### databaseName



```php
private string $databaseName
```






***

### manager



```php
private \MongoDB\Driver\Manager $manager
```






***

### bucketName



```php
private string $bucketName
```






***

### disableMD5



```php
private bool $disableMD5
```






***

### chunkSizeBytes



```php
private int $chunkSizeBytes
```






***

### readConcern



```php
private \MongoDB\Driver\ReadConcern $readConcern
```






***

### readPreference



```php
private \MongoDB\Driver\ReadPreference $readPreference
```






***

### typeMap



```php
private array $typeMap
```






***

### writeConcern



```php
private \MongoDB\Driver\WriteConcern $writeConcern
```






***

## Methods


### __construct

Constructs a GridFS bucket.

```php
public __construct(\MongoDB\Driver\Manager $manager, string $databaseName, array $options = []): mixed
```

Supported options:

* bucketName (string): The bucket name, which will be used as a prefix
  for the files and chunks collections. Defaults to "fs".

* chunkSizeBytes (integer): The chunk size in bytes. Defaults to
  261120 (i.e. 255 KiB).

* disableMD5 (boolean): When true, no MD5 sum will be generated for
  each stored file. Defaults to "false".

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* typeMap (array): Default type map for cursors and BSON documents.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\MongoDB\Driver\Manager** | Manager instance from the driver |
| `$databaseName` | **string** | Database name |
| `$options` | **array** | Bucket options |




***

### __debugInfo

Return internal properties for debugging purposes.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo - 

***

### delete

Delete a file from the GridFS bucket.

```php
public delete(mixed $id): mixed
```

If the files collection document is not found, this method will still
attempt to delete orphaned chunks.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | File ID |




***

### downloadToStream

Writes the contents of a GridFS file to a writable stream.

```php
public downloadToStream(mixed $id, resource $destination): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | File ID |
| `$destination` | **resource** | Writable Stream |




***

### downloadToStreamByName

Writes the contents of a GridFS file, which is selected by name and
revision, to a writable stream.

```php
public downloadToStreamByName(string $filename, resource $destination, array $options = []): mixed
```

Supported options:

 * revision (integer): Which revision (i.e. documents with the same
   filename and different uploadDate) of the file to retrieve. Defaults
   to -1 (i.e. the most recent revision).

Revision numbers are defined as follows:

 * 0 = the original stored file
 * 1 = the first revision
 * 2 = the second revision
 * etc…
 * -2 = the second most recent revision
 * -1 = the most recent revision






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Filename |
| `$destination` | **resource** | Writable Stream |
| `$options` | **array** | Download options |




***

### drop

Drops the files and chunks collections associated with this GridFS
bucket.

```php
public drop(): mixed
```











***

### find

Finds documents from the GridFS bucket's files collection matching the
query.

```php
public find(array|object $filter = [], array $options = []): \MongoDB\Driver\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Additional options |



**See Also:**

* \MongoDB\Operation\Find::__construct() - for supported options

***

### findOne

Finds a single document from the GridFS bucket's files collection
matching the query.

```php
public findOne(array|object $filter = [], array $options = []): array|object|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Additional options |



**See Also:**

* \MongoDB\GridFS\FindOne::__construct() - for supported options

***

### getBucketName

Return the bucket name.

```php
public getBucketName(): string
```











***

### getChunksCollection

Return the chunks collection.

```php
public getChunksCollection(): \MongoDB\Collection
```











***

### getChunkSizeBytes

Return the chunk size in bytes.

```php
public getChunkSizeBytes(): int
```











***

### getDatabaseName

Return the database name.

```php
public getDatabaseName(): string
```











***

### getFileDocumentForStream

Gets the file document of the GridFS file associated with a stream.

```php
public getFileDocumentForStream(resource $stream): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** | GridFS stream |




***

### getFileIdForStream

Gets the file document's ID of the GridFS file associated with a stream.

```php
public getFileIdForStream(resource $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** | GridFS stream |




***

### getFilesCollection

Return the files collection.

```php
public getFilesCollection(): \MongoDB\Collection
```











***

### getReadConcern

Return the read concern for this GridFS bucket.

```php
public getReadConcern(): \MongoDB\Driver\ReadConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php - 

***

### getReadPreference

Return the read preference for this GridFS bucket.

```php
public getReadPreference(): \MongoDB\Driver\ReadPreference
```











***

### getTypeMap

Return the type map for this GridFS bucket.

```php
public getTypeMap(): array
```











***

### getWriteConcern

Return the write concern for this GridFS bucket.

```php
public getWriteConcern(): \MongoDB\Driver\WriteConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php - 

***

### openDownloadStream

Opens a readable stream for reading a GridFS file.

```php
public openDownloadStream(mixed $id): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | File ID |




***

### openDownloadStreamByName

Opens a readable stream stream to read a GridFS file, which is selected
by name and revision.

```php
public openDownloadStreamByName(string $filename, array $options = []): resource
```

Supported options:

 * revision (integer): Which revision (i.e. documents with the same
   filename and different uploadDate) of the file to retrieve. Defaults
   to -1 (i.e. the most recent revision).

Revision numbers are defined as follows:

 * 0 = the original stored file
 * 1 = the first revision
 * 2 = the second revision
 * etc…
 * -2 = the second most recent revision
 * -1 = the most recent revision






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Filename |
| `$options` | **array** | Download options |




***

### openUploadStream

Opens a writable stream for writing a GridFS file.

```php
public openUploadStream(string $filename, array $options = []): resource
```

Supported options:

* _id (mixed): File document identifier. Defaults to a new ObjectId.

* chunkSizeBytes (integer): The chunk size in bytes. Defaults to the
  bucket's chunk size.

* disableMD5 (boolean): When true, no MD5 sum will be generated for
  the stored file. Defaults to "false".

* metadata (document): User data for the "metadata" field of the files
  collection document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Filename |
| `$options` | **array** | Upload options |




***

### rename

Renames the GridFS file with the specified ID.

```php
public rename(mixed $id, string $newFilename): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | File ID |
| `$newFilename` | **string** | New filename |




***

### uploadFromStream

Writes the contents of a readable stream to a GridFS file.

```php
public uploadFromStream(string $filename, resource $source, array $options = []): mixed
```

Supported options:

* _id (mixed): File document identifier. Defaults to a new ObjectId.

* chunkSizeBytes (integer): The chunk size in bytes. Defaults to the
  bucket's chunk size.

* disableMD5 (boolean): When true, no MD5 sum will be generated for
  the stored file. Defaults to "false".

* metadata (document): User data for the "metadata" field of the files
  collection document.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Filename |
| `$source` | **resource** | Readable stream |
| `$options` | **array** | Stream options |


**Return Value:**

ID of the newly created GridFS file



***

### createPathForFile

Creates a path for an existing GridFS file.

```php
private createPathForFile(\stdClass $file): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\stdClass** | GridFS file document |




***

### createPathForUpload

Creates a path for a new GridFS file, which does not yet have an ID.

```php
private createPathForUpload(): string
```











***

### getFilesNamespace

Returns the names of the files collection.

```php
private getFilesNamespace(): string
```











***

### getRawFileDocumentForStream

Gets the file document of the GridFS file associated with a stream.

```php
private getRawFileDocumentForStream(resource $stream): \stdClass
```

This returns the raw document from the StreamWrapper, which does not
respect the Bucket's type map.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** | GridFS stream |




***

### openDownloadStreamByFile

Opens a readable stream for the GridFS file.

```php
private openDownloadStreamByFile(\stdClass $file): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\stdClass** | GridFS file document |




***

### registerStreamWrapper

Registers the GridFS stream wrapper if it is not already registered.

```php
private registerStreamWrapper(): mixed
```











***


***
> yxorP Documentation
