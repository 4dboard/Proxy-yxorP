***

# ZipStream

ZipStream

Streamed, dynamically generated zip archives.

* Full name: `\ZipStream\ZipStream`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;0.3.0&#039;|
|`METHOD_STORE`|public| |&#039;store&#039;|
|`METHOD_DEFLATE`|public| |&#039;deflate&#039;|
|`COMPRESS`|public| |0x8|
|`NOCOMPRESS`|public| |0x0|
|`OPTION_LARGE_FILE_SIZE`|public| |&#039;large_file_size&#039;|
|`OPTION_LARGE_FILE_METHOD`|public| |&#039;large_file_method&#039;|
|`OPTION_SEND_HTTP_HEADERS`|public| |&#039;send_http_headers&#039;|
|`OPTION_HTTP_HEADER_CALLBACK`|public| |&#039;http_header_callback&#039;|
|`OPTION_OUTPUT_STREAM`|public| |&#039;output_stream&#039;|
|`OPTION_CONTENT_TYPE`|public| |&#039;content_type&#039;|
|`OPTION_CONTENT_DISPOSITION`|public| |&#039;content_disposition&#039;|

## Properties


### opt

Global Options

```php
public array $opt
```






***

### files



```php
public array $files
```






***

### cdr_ofs



```php
public int $cdr_ofs
```






***

### ofs



```php
public int $ofs
```






***

### need_headers



```php
protected bool $need_headers
```






***

### output_name



```php
protected null|string $output_name
```






***

## Methods


### __construct

Create a new ZipStream object.

```php
public __construct(string $name = null, array $opt = array()): mixed
```

Parameters:






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | - Name of output file (optional). |
| `$opt` | **array** | - Hash of archive options (optional, see &quot;Archive Options&quot;<br />          below).<br /><br />Archive Options:<br /><br />  comment             - Comment for this archive.<br />  content_type        - HTTP Content-Type.  Defaults to &#039;application/x-zip&#039;.<br />  content_disposition - HTTP Content-Disposition.  Defaults to<br />                        &#039;attachment; filename=\&quot;FILENAME\&quot;&#039;, where<br />                        FILENAME is the specified filename.<br />  large_file_size     - Size, in bytes, of the largest file to try<br />                        and load into memory (used by<br />                        addFileFromPath()).  Large files may also<br />                        be compressed differently; see the<br />                        &#039;large_file_method&#039; option.<br />  large_file_method   - How to handle large files.  Legal values are<br />                        &#039;store&#039; (the default), or &#039;deflate&#039;.  Store<br />                        sends the file raw and is significantly<br />                        faster, while &#039;deflate&#039; compresses the file<br />                        and is much, much slower.  Note that deflate<br />                        must compress the file twice and extremely<br />                        slow.<br />  sendHttpHeaders   - Boolean indicating whether or not to send<br />                        the HTTP headers for this file.<br /><br />Note that content_type and content_disposition do nothing if you are<br />not sending HTTP headers.<br /><br />Large File Support:<br /><br />By default, the method addFileFromPath() will send send files<br />larger than 20 megabytes along raw rather than attempting to<br />compress them.  You can change both the maximum size and the<br />compression behavior using the large_file_* options above, with the<br />following caveats:<br /><br />* For &quot;small&quot; files (e.g. files smaller than large_file_size), the<br />  memory use can be up to twice that of the actual file.  In other<br />  words, adding a 10 megabyte file to the archive could potentially<br />  occupty 20 megabytes of memory.<br /><br />* Enabling compression on large files (e.g. files larger than<br />  large_file_size) is extremely slow, because ZipStream has to pass<br />  over the large file once to calculate header information, and then<br />  again to compress and send the actual data.<br /><br />Examples:<br /><br />  // create a new zip file named &#039;foo.zip&#039;<br />  $zip = new ZipStream(&#039;foo.zip&#039;);<br /><br />  // create a new zip file named &#039;bar.zip&#039; with a comment<br />  $zip = new ZipStream(&#039;bar.zip&#039;, array(<br />    &#039;comment&#039; =&gt; &#039;this is a comment for the zip file.&#039;,<br />  ));<br /><br />Notes:<br /><br />If you do not set a filename, then this library _DOES NOT_ send HTTP<br />headers by default.  This behavior is to allow software to send its<br />own headers (including the filename), and still use this library. |




***

### addFileFromPath

addFileFromPath

```php
public addFileFromPath(string $name, string $path, array $opt = array(), string $storage_method = &quot;deflate&quot;): void
```

add a file at path to the archive.

Note that large files may be compresed differently than smaller
files; see the "Large File Support" section above for more
information.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | - name of file in archive (including directory path). |
| `$path` | **string** | - path to file on disk (note: paths should be encoded using<br />UNIX-style forward slashes -- e.g &#039;/path/to/some/file&#039;). |
| `$opt` | **array** | - Hash of options for file (optional, see &quot;File Options&quot;<br />         below).<br /><br />File Options:<br /> time     - Last-modified timestamp (seconds since the epoch) of<br />            this file.  Defaults to the current time.<br /> comment  - Comment related to this file.<br /><br />Examples:<br /><br />  // add a file named &#039;foo.txt&#039; from the local file &#039;/tmp/foo.txt&#039;<br />  $zip-&gt;addFileFromPath(&#039;foo.txt&#039;, &#039;/tmp/foo.txt&#039;);<br /><br />  // add a file named &#039;bigfile.rar&#039; from the local file<br />  // &#039;/usr/share/bigfile.rar&#039; with a comment and a last-modified<br />  // time of two hours ago<br />  $path = &#039;/usr/share/bigfile.rar&#039;;<br />  $zip-&gt;addFileFromPath(&#039;bigfile.rar&#039;, $path, array(<br />    &#039;time&#039;    =&gt; time() - 2 * 3600,<br />    &#039;comment&#039; =&gt; &#039;this is a comment about bar.jpg&#039;,<br />  )); |
| `$storage_method` | **string** | - storage method for the file: either &#039;deflate&#039; or &#039;store&#039; |




***

### isLargeFile

Is this file larger than large_file_size?

```php
protected isLargeFile(string $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### addLargeFile

Add a large file from the given path.

```php
protected addLargeFile(string $name, string $path, array $opt = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$path` | **string** |  |
| `$opt` | **array** |  |




***

### addFileHeader

Create and send zip header for this file.

```php
protected addFileHeader(string $name, array& $opt, int $meth, string $crc, int $zlen, int $len, \ZipStream\Hex $genb = 0x0): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$opt` | **array** |  |
| `$meth` | **int** |  |
| `$crc` | **string** |  |
| `$zlen` | **int** |  |
| `$len` | **int** |  |
| `$genb` | **\ZipStream\Hex** |  |


**Return Value:**

$num_bytes_written



***

### dostime

Convert a UNIX timestamp to a DOS timestamp.

```php
final protected dostime(int $when): int
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$when` | **int** |  |


**Return Value:**

DOS Timestamp



***

### packFields

Create a format string and argument list for pack(), then call
pack() and return the result.

```php
protected packFields(array $fields): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **array** |  |




***

### send

Send string, sending HTTP headers if necessary.

```php
protected send(string $str): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |




***

### sendHttpHeaders

Send HTTP headers for this stream.

```php
protected sendHttpHeaders(): void
```











***

### addToCdr

Save file attributes for trailing CDR record.

```php
private addToCdr(string $name, array $opt, int $meth, string $crc, int $zlen, int $len, int $rec_len, \ZipStream\Hex $genb = 0x0): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$opt` | **array** |  |
| `$meth` | **int** |  |
| `$crc` | **string** |  |
| `$zlen` | **int** |  |
| `$len` | **int** |  |
| `$rec_len` | **int** |  |
| `$genb` | **\ZipStream\Hex** |  |


**Return Value:**

$num_bytes_written



***

### addFile

addFile

```php
public addFile(string $name, string $data, array $opt = array(), string $storage_method = &#039;deflate&#039;): mixed
```

add a file to the archive






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | - path of file in archive (including directory). |
| `$data` | **string** | - contents of file |
| `$opt` | **array** | - Hash of options for file (optional, see &quot;File Options&quot;<br />         below).<br /><br />File Options:<br /> time     - Last-modified timestamp (seconds since the epoch) of<br />            this file.  Defaults to the current time.<br /> comment  - Comment related to this file.<br /><br />Examples:<br /><br />  // add a file named &#039;foo.txt&#039;<br />  $data = file_get_contents(&#039;foo.txt&#039;);<br />  $zip-&gt;addFile(&#039;foo.txt&#039;, $data);<br /><br />  // add a file named &#039;bar.jpg&#039; with a comment and a last-modified<br />  // time of two hours ago<br />  $data = file_get_contents(&#039;bar.jpg&#039;);<br />  $zip-&gt;addFile(&#039;bar.jpg&#039;, $data, array(<br />    &#039;time&#039;    =&gt; time() - 2 * 3600,<br />    &#039;comment&#039; =&gt; &#039;this is a comment about bar.jpg&#039;,<br />  )); |
| `$storage_method` | **string** | - storage method for file, could be &quot;store&quot; or &quot;deflate&quot; |




***

### getStorageConstant



```php
protected getStorageConstant(mixed $storage_method): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage_method` | **mixed** |  |




***

### addFileFromStream

addFile_from_stream

```php
public addFileFromStream(string $name, resource $stream, array $opt = array(), mixed $storage_method = self::METHOD_DEFLATE): void
```

dds an open stream to the archive uncompressed






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | - path of file in archive (including directory). |
| `$stream` | **resource** | - contents of file as a stream resource |
| `$opt` | **array** | - Hash of options for file (optional, see &quot;File Options&quot; below).<br /><br />File Options:<br /> time     - Last-modified timestamp (seconds since the epoch) of<br />            this file.  Defaults to the current time.<br /> comment  - Comment related to this file.<br /><br />Examples:<br /><br />  // create a temporary file stream and write text to it<br />  $fp = tmpfile();<br />  fwrite($fp, &#039;The quick brown fox jumped over the lazy dog.&#039;);<br /><br />  // add a file named &#039;streamfile.txt&#039; from the content of the stream<br />  $x-&gt;addFile_from_stream(&#039;streamfile.txt&#039;, $fp); |
| `$storage_method` | **mixed** |  |




***

### addDataDescriptorHeader



```php
protected addDataDescriptorHeader(int $len, int $zlen, string $crc): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$len` | **int** |  |
| `$zlen` | **int** |  |
| `$crc` | **string** |  |


**Return Value:**

$num_bytes_written. Num bytes written to zip stream output.



***

### finish

finish

```php
public finish(): void
```

Write zip footer to stream.

Example:

 // add a list of files to the archive
 $files = array('foo.txt', 'bar.jpg');
 foreach ($files as $path)
   $zip->addFile($path, file_get_contents($path));

 // write footer to stream
 $zip->finish();









***

### addCdr

Add CDR (Central Directory Record) footer.

```php
protected addCdr(array $opt = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$opt` | **array** |  |




***

### addCdrFile

Send CDR record for specified file.

```php
protected addCdrFile(array $args): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |




***

### addCdrEof

Send CDR EOF (Central Directory Record End-of-File) record.

```php
protected addCdrEof(array $opt = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$opt` | **array** |  |




***

### clear

Clear all internal variables.  Note that the stream object is not
usable after this.

```php
protected clear(): void
```











***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
