***

# DescriptorHelper

This class adds helper method to describe objects in various formats.



* Full name: `\Symfony\Component\Console\Helper\DescriptorHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)



## Properties


### descriptors



```php
private \Symfony\Component\Console\Descriptor\DescriptorInterface[] $descriptors
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### describe

Describes an object if supported.

```php
public describe(\Symfony\Component\Console\Output\OutputInterface $output, ?object $object, array $options = []): mixed
```

Available options are:
* format: string, the output format name
* raw_text: boolean, sets output type as raw






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$object` | **?object** |  |
| `$options` | **array** |  |




***

### register

Registers a descriptor.

```php
public register(string $format, \Symfony\Component\Console\Descriptor\DescriptorInterface $descriptor): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$descriptor` | **\Symfony\Component\Console\Descriptor\DescriptorInterface** |  |




***

### getName

{@inheritdoc}

```php
public getName(): mixed
```











***

### getFormats



```php
public getFormats(): array
```











***


## Inherited methods


### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |




***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet|null
```











***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(?string $string): int
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### width

Returns the width of a string, using mb_strwidth if it is available.

```php
public static width(?string $string): int
```

The width is how many characters positions the string will use.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### length

Returns the length of a string, using mb_strlen if it is available.

```php
public static length(?string $string): int
```

The length is related to how many bytes the string will use.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### substr

Returns the subset of a string, using mb_substr if it is available.

```php
public static substr(?string $string, int $from, int $length = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |
| `$from` | **int** |  |
| `$length` | **int** |  |




***

### formatTime



```php
public static formatTime(mixed $secs): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |




***

### formatMemory



```php
public static formatMemory(int $memory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **int** |  |




***

### strlenWithoutDecoration



```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |




***

### removeDecoration



```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |




***


***

