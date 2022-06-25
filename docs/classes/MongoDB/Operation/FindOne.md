***

# FindOne

Operation for finding a single document with the find command.



* Full name: `\MongoDB\Operation\FindOne`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md), [`\MongoDB\Operation\Explainable`](./Explainable.md)

**See Also:**

* \MongoDB\Collection::findOne() - 
* http://docs.mongodb.org/manual/tutorial/query-documents/ - 
* http://docs.mongodb.org/manual/reference/operator/query-modifier/ - 



## Properties


### find



```php
private \MongoDB\Operation\Find $find
```






***

## Methods


### __construct

Constructs a find command for finding a single document.

```php
public __construct(string $databaseName, string $collectionName, array|object $filter, array $options = []): mixed
```

Supported options:

* collation (document): Collation specification.

  This is not supported for server versions < 3.4 and will result in an
  exception at execution time if used.

* comment (string): Attaches a comment to the query. If "$comment" also
  exists in the modifiers document, this option will take precedence.

* hint (string|document): The index to use. Specify either the index
  name as a string or the index key pattern as a document. If specified,
  then the query system will only consider plans using the hinted index.

* max (document): The exclusive upper bound for a specific index.

* maxScan (integer): Maximum number of documents or index keys to scan
  when executing the query.

  This option has been deprecated since version 1.4.

* maxTimeMS (integer): The maximum amount of time to allow the query to
  run. If "$maxTimeMS" also exists in the modifiers document, this
  option will take precedence.

* min (document): The inclusive upper bound for a specific index.

* modifiers (document): Meta-operators modifying the output or behavior
  of a query.

* projection (document): Limits the fields to return for the matching
  document.

* readConcern (MongoDB\Driver\ReadConcern): Read concern.

  This is not supported for server versions < 3.2 and will result in an
  exception at execution time if used.

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* returnKey (boolean): If true, returns only the index keys in the
  resulting documents.

* session (MongoDB\Driver\Session): Client session.

  Sessions are not supported for server versions < 3.6.

* showRecordId (boolean): Determines whether to return the record
  identifier for each document. If true, adds a field $recordId to the
  returned documents.

* skip (integer): The number of documents to skip before returning.

* sort (document): The order in which to return matching documents. If
  "$orderby" also exists in the modifiers document, this option will
  take precedence.

* typeMap (array): Type map for BSON deserialization.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$collectionName` | **string** | Collection name |
| `$filter` | **array&#124;object** | Query by which to filter documents |
| `$options` | **array** | Command options |




***

### execute

Execute the operation.

```php
public execute(\MongoDB\Driver\Server $server): array|object|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |



**See Also:**

* \MongoDB\Operation\Executable::execute() - 

***

### getCommandDocument



```php
public getCommandDocument(\MongoDB\Driver\Server $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
