***

# Client





* Full name: `\MongoDB\Client`



## Properties


### defaultTypeMap



```php
private static array $defaultTypeMap
```



* This property is **static**.


***

### wireVersionForReadConcern



```php
private static int $wireVersionForReadConcern
```



* This property is **static**.


***

### wireVersionForWritableCommandWriteConcern



```php
private static int $wireVersionForWritableCommandWriteConcern
```



* This property is **static**.


***

### handshakeSeparator



```php
private static string $handshakeSeparator
```



* This property is **static**.


***

### version



```php
private static string|null $version
```



* This property is **static**.


***

### manager



```php
private \MongoDB\Driver\Manager $manager
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

### uri



```php
private string $uri
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

Constructs a new Client instance.

```php
public __construct(string $uri = &#039;mongodb://127.0.0.1/&#039;, array $uriOptions = [], array $driverOptions = []): mixed
```

This is the preferred class for connecting to a MongoDB server or
cluster of servers. It serves as a gateway for accessing individual
databases and collections.

Supported driver-specific options:

 * typeMap (array): Default type map for cursors and BSON documents.

Other options are documented in MongoDB\Driver\Manager::__construct().






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** | MongoDB connection string |
| `$uriOptions` | **array** | Additional connection string options |
| `$driverOptions` | **array** | Driver-specific options |



**See Also:**

* http://docs.mongodb.org/manual/reference/connection-string/ - * http://php.net/manual/en/mongodb-driver-manager.construct.php - * http://php.net/manual/en/mongodb.persistence.php#mongodb.persistence.typemaps - 

***

### __debugInfo

Return internal properties for debugging purposes.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo - 

***

### __get

Select a database.

```php
public __get(string $databaseName): \MongoDB\Database
```

Note: databases whose names contain special characters (e.g. "-") may
be selected with complex syntax (e.g. $client->{"that-database"}) or
{@link}.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Name of the database to select |



**See Also:**

* http://php.net/oop5.overloading#object.get - * http://php.net/types.string#language.types.string.parsing.complex - 

***

### __toString

Return the connection string (i.e. URI).

```php
public __toString(): string
```











***

### createClientEncryption

Returns a ClientEncryption instance for explicit encryption and decryption

```php
public createClientEncryption(array $options): \MongoDB\Driver\ClientEncryption
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Encryption options |




***

### dropDatabase

Drop a database.

```php
public dropDatabase(string $databaseName, array $options = []): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$options` | **array** | Additional options |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\DropDatabase::__construct() - for supported options

***

### getManager

Return the Manager.

```php
public getManager(): \MongoDB\Driver\Manager
```











***

### getReadConcern

Return the read concern for this client.

```php
public getReadConcern(): \MongoDB\Driver\ReadConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php - 

***

### getReadPreference

Return the read preference for this client.

```php
public getReadPreference(): \MongoDB\Driver\ReadPreference
```











***

### getTypeMap

Return the type map for this client.

```php
public getTypeMap(): array
```











***

### getWriteConcern

Return the write concern for this client.

```php
public getWriteConcern(): \MongoDB\Driver\WriteConcern
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php - 

***

### listDatabaseNames

List database names.

```php
public listDatabaseNames(array $options = []): \Iterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |



**See Also:**

* \MongoDB\Operation\ListDatabaseNames::__construct() - for supported options

***

### listDatabases

List databases.

```php
public listDatabases(array $options = []): \MongoDB\Model\DatabaseInfoIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |



**See Also:**

* \MongoDB\Operation\ListDatabases::__construct() - for supported options

***

### selectCollection

Select a collection.

```php
public selectCollection(string $databaseName, string $collectionName, array $options = []): \MongoDB\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Name of the database containing the collection |
| `$collectionName` | **string** | Name of the collection to select |
| `$options` | **array** | Collection constructor options |



**See Also:**

* \MongoDB\Collection::__construct() - for supported options

***

### selectDatabase

Select a database.

```php
public selectDatabase(string $databaseName, array $options = []): \MongoDB\Database
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Name of the database to select |
| `$options` | **array** | Database constructor options |



**See Also:**

* \MongoDB\Database::__construct() - for supported options

***

### startSession

Start a new client session.

```php
public startSession(array $options = []): \MongoDB\Driver\Session
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Session options |



**See Also:**

* http://php.net/manual/en/mongodb-driver-manager.startsession.php - 

***

### watch

Create a change stream for watching changes to the cluster.

```php
public watch(array $pipeline = [], array $options = []): \MongoDB\ChangeStream
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipeline` | **array** | List of pipeline operations |
| `$options` | **array** | Command options |



**See Also:**

* \MongoDB\Operation\Watch::__construct() - for supported options

***

### getVersion



```php
private static getVersion(): string
```



* This method is **static**.







***

### mergeDriverInfo



```php
private mergeDriverInfo(array $driver): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **array** |  |




***


***

