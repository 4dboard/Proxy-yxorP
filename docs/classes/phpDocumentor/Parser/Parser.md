***

# Parser

Class responsible for parsing the given file or files to the intermediate
structure file.

This class can be used to parse one or more files to the intermediate file
format for further processing.

Example of use:

    $files = new \phpDocumentor\File\Collection();
    $ files->addDirectories(getcwd());
    $parser = new \phpDocumentor\Parser\Parser();
    $parser->setPath($files->getProjectRoot());
    echo $parser->parseFiles($files);

* Full name: `\phpDocumentor\Parser\Parser`
* This class implements:
[`\Psr\Log\LoggerAwareInterface`](../../Psr/Log/LoggerAwareInterface.md)



## Properties


### defaultPackageName



```php
protected string $defaultPackageName
```






***

### force



```php
protected bool $force
```






***

### validate



```php
protected bool $validate
```






***

### markers



```php
protected string[] $markers
```






***

### ignoredTags



```php
protected string[] $ignoredTags
```






***

### path



```php
protected string $path
```






***

### logger



```php
protected \Psr\Log\LoggerInterface $logger
```






***

### encoding



```php
protected string $encoding
```






***

### stopwatch



```php
protected \Symfony\Component\Stopwatch\Stopwatch $stopwatch
```






***

## Methods


### __construct

Initializes the parser.

```php
public __construct(): mixed
```

This constructor checks the user's PHP ini settings to detect which encoding is used by default. This encoding
is used as a default value for phpDocumentor to convert the source files that it receives.

If no encoding is specified than 'utf-8' is assumed by default.









***

### setStopwatch

Registers the component that profiles the execution of the parser.

```php
public setStopwatch(\Symfony\Component\Stopwatch\Stopwatch $stopwatch): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stopwatch` | **\Symfony\Component\Stopwatch\Stopwatch** |  |




***

### setForced

Sets whether to force a full parse run of all files.

```php
public setForced(bool $forced): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$forced` | **bool** | Forces a full parse. |




***

### isForced

Returns whether a full rebuild is required.

```php
public isForced(): bool
```











***

### setValidate

Sets whether to run PHPLint on every file.

```php
public setValidate(bool $validate): void
```

PHPLint has a huge performance impact on the execution of phpDocumentor and
is thus disabled by default.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validate` | **bool** | when true this file will be checked. |




***

### doValidation

Returns whether we want to run PHPLint on every file.

```php
public doValidation(): bool
```











***

### setMarkers

Sets a list of markers to gather (i.e. TODO, FIXME).

```php
public setMarkers(string[] $markers): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$markers` | **string[]** | A list or markers to gather. |




***

### getMarkers

Returns the list of markers.

```php
public getMarkers(): string[]
```











***

### setIgnoredTags

Sets a list of tags to ignore.

```php
public setIgnoredTags(string[] $ignoredTags): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoredTags` | **string[]** | A list of tags to ignore. |




***

### getIgnoredTags

Returns the list of ignored tags.

```php
public getIgnoredTags(): string[]
```











***

### setPath

Sets the base path of the files that will be parsed.

```php
public setPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Must be an absolute path. |




***

### getPath

Returns the absolute base path for all files.

```php
public getPath(): string
```











***

### setDefaultPackageName

Sets the name of the default package.

```php
public setDefaultPackageName(string $defaultPackageName): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultPackageName` | **string** | Name used to categorize elements<br />without an @package tag. |




***

### getDefaultPackageName

Returns the name of the default package.

```php
public getDefaultPackageName(): string
```











***

### setEncoding

Sets the encoding of the files.

```php
public setEncoding(string $encoding): void
```

With this option it is possible to tell the parser to use a specific encoding to interpret the provided files.
By default this is set to UTF-8, in which case no action is taken. Any other encoding will result in the output
being converted to UTF-8 using `iconv`.

Please note that it is recommended to provide files in UTF-8 format; this will ensure a faster performance since
no transformation is required.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** |  |




***

### getEncoding

Returns the currently active encoding.

```php
public getEncoding(): string
```











***

### setLogger

Sets a logger instance on the object

```php
public setLogger(\Psr\Log\LoggerInterface $logger): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Psr\Log\LoggerInterface** |  |




***

### parse

Iterates through the given files feeds them to the builder.

```php
public parse(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder, \phpDocumentor\Fileset\Collection $files): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |
| `$files` | **\phpDocumentor\Fileset\Collection** | A files container to parse. |




***

### getFilenames

Extract all filenames from the given collection and output the amount of files.

```php
protected getFilenames(\phpDocumentor\Fileset\Collection $files): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **\phpDocumentor\Fileset\Collection** |  |




***

### parseFileIntoDescriptor

Parses a file and creates a Descriptor for it in the project.

```php
protected parseFileIntoDescriptor(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder, string $filename): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |
| `$filename` | **string** |  |




***

### forceRebuildIfSettingsHaveModified

Checks if the settings of the project have changed and forces a complete rebuild if they have.

```php
protected forceRebuildIfSettingsHaveModified(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |




***

### logAfterParsingAFile

Collects the time and duration of processing a file, logs it and returns the new amount of memory in use.

```php
protected logAfterParsingAFile(int $memory): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **int** |  |




***

### logAfterParsingAllFiles

Writes the complete parsing cycle to log.

```php
protected logAfterParsingAllFiles(): void
```











***

### log

Dispatches a logging request.

```php
protected log(string $message, string $priority = LogLevel::INFO, string[] $parameters = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **string** | The logging priority as declared in the LogLevel PSR-3 class. |
| `$parameters` | **string[]** |  |




***

### startTimingTheParsePhase



```php
protected startTimingTheParsePhase(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
