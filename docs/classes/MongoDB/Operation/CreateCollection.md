***

# CreateCollection

Operation for the create command.



* Full name: `\MongoDB\Operation\CreateCollection`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Database::createCollection() - 
* http://docs.mongodb.org/manual/reference/command/create/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`USE_POWER_OF_2_SIZES`|public| |1|
|`NO_PADDING`|public| |2|

## Properties


### wireVersionForCollation



```php
private static int $wireVersionForCollation
```



* This property is **static**.


***

### wireVersionForWriteConcern



```php
private static int $wireVersionForWriteConcern
```



* This property is **static**.


***

### databaseName



```php
private string $databaseName
```






***

### collectionName



```php
private string $collectionName
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs a create command.

```php
public __construct(string $databaseName, string $collectionName, array $options = []): mixed
```

Supported options:

* autoIndexId (boolean): Specify false to disable the automatic creation
  of an index on the _id field. For replica sets, this option cannot be
  false. The default is true.

  This option has been deprecated since MongoDB 3.2. As of MongoDB 4.0,
  this option cannot be false when creating a replicated collection
  (i.e. a collection outside of the local database in any mongod mode).

* capped (boolean): Specify true to create a capped collection. If set,
  the size option must also be specified. The default is false.

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.

* flags (integer): Options for the MMAPv1 storage engine only. Must be a
  bitwise combination CreateCollection::USE_POWER_OF_2_SIZES and
  CreateCollection::NO_PADDING. The default is
  CreateCollection::USE_POWER_OF_2_SIZES.

* indexOptionDefaults (document): Default configuration for indexes when
  creating the collection.

* max (integer): The maximum number of documents allowed in the capped
  collection. The size option takes precedence over this limit.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* size (integer): The maximum number of bytes for a capped collection.

* storageEngine (document): Storage engine options.

* typeMap (array): Type map for BSON deserialization. This will only be
  used for the returned command result document.

* validationAction (string): Validation action.

* validationLevel (string): Validation level.

* validator (document): Validation rules or expressions.

* writeConcern (MongoDB\Driver\WriteConcern): Write concern.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$options` | **array** | Command options |



**See Also:**

* http://source.wiredtiger.com/2.4.1/struct_w_t___s_e_s_s_i_o_n.html#a358ca4141d59c345f401c58501276bbb - * https://docs.mongodb.org/manual/core/document-validation/ - 

***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): array|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |


**Return Value:**

Command result document


**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### createCommand

Create the create command.

```php
private createCommand(): \MongoDB\Driver\Command
```











***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executewritecommand.php - 

***


***
> yxorP Documentation
