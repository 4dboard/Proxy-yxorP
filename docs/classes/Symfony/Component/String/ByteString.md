***

# ByteString

Represents a binary-safe string of bytes.



* Full name: `\Symfony\Component\String\ByteString`
* Parent class: [`\Symfony\Component\String\AbstractString`](./AbstractString.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ALPHABET_ALPHANUMERIC`|private| |&#039;123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz&#039;|


## Methods


### __construct



```php
public __construct(string $string = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### fromRandom



```php
public static fromRandom(int $length = 16, string $alphabet = null): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$alphabet` | **string** |  |




***

### bytesAt



```php
public bytesAt(int $offset): int[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |




***

### append



```php
public append(string $suffix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |




***

### camel



```php
public camel(): static
```











***

### chunk



```php
public chunk(int $length = 1): static[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |




***

### endsWith



```php
public endsWith(string|iterable|\Symfony\Component\String\AbstractString $suffix): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string&#124;iterable&#124;\Symfony\Component\String\AbstractString** |  |




***

### equalsTo



```php
public equalsTo(string|iterable|\Symfony\Component\String\AbstractString $string): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string&#124;iterable&#124;\Symfony\Component\String\AbstractString** |  |




***

### folded



```php
public folded(): static
```











***

### indexOf



```php
public indexOf(string|iterable|\Symfony\Component\String\AbstractString $needle, int $offset): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;iterable&#124;\Symfony\Component\String\AbstractString** |  |
| `$offset` | **int** |  |




***

### indexOfLast



```php
public indexOfLast(string|iterable|\Symfony\Component\String\AbstractString $needle, int $offset): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;iterable&#124;\Symfony\Component\String\AbstractString** |  |
| `$offset` | **int** |  |




***

### isUtf8



```php
public isUtf8(): bool
```











***

### join



```php
public join(array $strings, string $lastGlue = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array** |  |
| `$lastGlue` | **string** |  |




***

### length



```php
public length(): int
```











***

### lower



```php
public lower(): static
```











***

### match

Matches the string using a regular expression.

```php
public match(string $regexp, int $flags, int $offset): array
```

Pass PREG_PATTERN_ORDER or PREG_SET_ORDER as $flags to get all occurrences matching the regular expression.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regexp` | **string** |  |
| `$flags` | **int** |  |
| `$offset` | **int** |  |


**Return Value:**

All matches in a multi-dimensional array ordered according to flags



***

### padBoth



```php
public padBoth(int $length, string $padStr = &#039; &#039;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### padEnd



```php
public padEnd(int $length, string $padStr = &#039; &#039;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### padStart



```php
public padStart(int $length, string $padStr = &#039; &#039;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### prepend



```php
public prepend(string $prefix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### replace



```php
public replace(string $from, string $to): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** |  |
| `$to` | **string** |  |




***

### replaceMatches



```php
public replaceMatches(string $fromRegexp, string|callable $to): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromRegexp` | **string** |  |
| `$to` | **string&#124;callable** |  |




***

### reverse



```php
public reverse(): static
```











***

### slice



```php
public slice(int $start, int $length = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$length` | **int** |  |




***

### snake



```php
public snake(): static
```











***

### splice



```php
public splice(string $replacement, int $start, int $length = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **string** |  |
| `$start` | **int** |  |
| `$length` | **int** |  |




***

### split



```php
public split(string $delimiter, int $limit = null, int $flags = null): static[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** |  |
| `$limit` | **int** |  |
| `$flags` | **int** |  |




***

### startsWith



```php
public startsWith(string|iterable|\Symfony\Component\String\AbstractString $prefix): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;iterable&#124;\Symfony\Component\String\AbstractString** |  |




***

### title



```php
public title(bool $allWords = false): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allWords` | **bool** |  |




***

### toUnicodeString



```php
public toUnicodeString(string $fromEncoding = null): \Symfony\Component\String\UnicodeString
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromEncoding` | **string** |  |




***

### toCodePointString



```php
public toCodePointString(string $fromEncoding = null): \Symfony\Component\String\CodePointString
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromEncoding` | **string** |  |




***

### trim



```php
public trim(string $chars = &quot; 	
 &quot;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### trimEnd



```php
public trimEnd(string $chars = &quot; 	
 &quot;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### trimStart



```php
public trimStart(string $chars = &quot; 	
 &quot;): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### upper



```php
public upper(): static
```











***

### width

Returns the printable length on a terminal.

```php
public width(bool $ignoreAnsiDecoration = true): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreAnsiDecoration` | **bool** |  |




***


## Inherited methods


### __construct



```php
public __construct(string $string = &#039;&#039;): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### unwrap

Unwraps instances of AbstractString back to strings.

```php
public static unwrap(array $values): string[]|array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### wrap

Wraps (and normalizes) strings in instances of AbstractString.

```php
public static wrap(array $values): static[]|array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### after



```php
public after(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |




***

### afterLast



```php
public afterLast(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |




***

### append



```php
public append(string $suffix): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |




***

### before



```php
public before(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |




***

### beforeLast



```php
public beforeLast(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |




***

### bytesAt



```php
public bytesAt(int $offset): int[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |




***

### camel



```php
public camel(): static
```




* This method is **abstract**.






***

### chunk



```php
public chunk(int $length = 1): static[]
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |




***

### collapseWhitespace



```php
public collapseWhitespace(): static
```











***

### containsAny



```php
public containsAny(string|string[] $needle): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |




***

### endsWith



```php
public endsWith(string|string[] $suffix): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string&#124;string[]** |  |




***

### ensureEnd



```php
public ensureEnd(string $suffix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |




***

### ensureStart



```php
public ensureStart(string $prefix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### equalsTo



```php
public equalsTo(string|string[] $string): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string&#124;string[]** |  |




***

### folded



```php
public folded(): static
```




* This method is **abstract**.






***

### ignoreCase



```php
public ignoreCase(): static
```











***

### indexOf



```php
public indexOf(string|string[] $needle, int $offset): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$offset` | **int** |  |




***

### indexOfLast



```php
public indexOfLast(string|string[] $needle, int $offset): ?int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$offset` | **int** |  |




***

### isEmpty



```php
public isEmpty(): bool
```











***

### join



```php
public join(array $strings, string $lastGlue = null): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array** |  |
| `$lastGlue` | **string** |  |




***

### jsonSerialize



```php
public jsonSerialize(): string
```











***

### length



```php
public length(): int
```




* This method is **abstract**.






***

### lower



```php
public lower(): static
```




* This method is **abstract**.






***

### match

Matches the string using a regular expression.

```php
public match(string $regexp, int $flags, int $offset): array
```

Pass PREG_PATTERN_ORDER or PREG_SET_ORDER as $flags to get all occurrences matching the regular expression.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regexp` | **string** |  |
| `$flags` | **int** |  |
| `$offset` | **int** |  |


**Return Value:**

All matches in a multi-dimensional array ordered according to flags



***

### padBoth



```php
public padBoth(int $length, string $padStr = &#039; &#039;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### padEnd



```php
public padEnd(int $length, string $padStr = &#039; &#039;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### padStart



```php
public padStart(int $length, string $padStr = &#039; &#039;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |




***

### prepend



```php
public prepend(string $prefix): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### repeat



```php
public repeat(int $multiplier): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$multiplier` | **int** |  |




***

### replace



```php
public replace(string $from, string $to): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** |  |
| `$to` | **string** |  |




***

### replaceMatches



```php
public replaceMatches(string $fromRegexp, string|callable $to): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromRegexp` | **string** |  |
| `$to` | **string&#124;callable** |  |




***

### reverse



```php
public reverse(): static
```




* This method is **abstract**.






***

### slice



```php
public slice(int $start, int $length = null): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$length` | **int** |  |




***

### snake



```php
public snake(): static
```




* This method is **abstract**.






***

### splice



```php
public splice(string $replacement, int $start, int $length = null): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **string** |  |
| `$start` | **int** |  |
| `$length` | **int** |  |




***

### split



```php
public split(string $delimiter, int $limit = null, int $flags = null): static[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** |  |
| `$limit` | **int** |  |
| `$flags` | **int** |  |




***

### startsWith



```php
public startsWith(string|string[] $prefix): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;string[]** |  |




***

### title



```php
public title(bool $allWords = false): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allWords` | **bool** |  |




***

### toByteString



```php
public toByteString(string $toEncoding = null): \Symfony\Component\String\ByteString
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$toEncoding` | **string** |  |




***

### toCodePointString



```php
public toCodePointString(): \Symfony\Component\String\CodePointString
```











***

### toString



```php
public toString(): string
```











***

### toUnicodeString



```php
public toUnicodeString(): \Symfony\Component\String\UnicodeString
```











***

### trim



```php
public trim(string $chars = &quot; 	
  ﻿&quot;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### trimEnd



```php
public trimEnd(string $chars = &quot; 	
  ﻿&quot;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### trimPrefix



```php
public trimPrefix(string|string[] $prefix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;string[]** |  |




***

### trimStart



```php
public trimStart(string $chars = &quot; 	
  ﻿&quot;): static
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |




***

### trimSuffix



```php
public trimSuffix(string|string[] $suffix): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string&#124;string[]** |  |




***

### truncate



```php
public truncate(int $length, string $ellipsis = &#039;&#039;, bool $cut = true): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$ellipsis` | **string** |  |
| `$cut` | **bool** |  |




***

### upper



```php
public upper(): static
```




* This method is **abstract**.






***

### width

Returns the printable length on a terminal.

```php
public width(bool $ignoreAnsiDecoration = true): int
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreAnsiDecoration` | **bool** |  |




***

### wordwrap



```php
public wordwrap(int $width = 75, string $break = &quot;
&quot;, bool $cut = false): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** |  |
| `$break` | **string** |  |
| `$cut` | **bool** |  |




***

### __sleep



```php
public __sleep(): array
```











***

### __clone



```php
public __clone(): mixed
```











***

### __toString



```php
public __toString(): string
```











***


***

