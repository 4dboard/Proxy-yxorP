***

# Color





* Full name: `\Symfony\Component\Console\Color`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COLORS`|private| |[&#039;black&#039; =&gt; 0, &#039;red&#039; =&gt; 1, &#039;green&#039; =&gt; 2, &#039;yellow&#039; =&gt; 3, &#039;blue&#039; =&gt; 4, &#039;magenta&#039; =&gt; 5, &#039;cyan&#039; =&gt; 6, &#039;white&#039; =&gt; 7, &#039;default&#039; =&gt; 9]|
|`BRIGHT_COLORS`|private| |[&#039;gray&#039; =&gt; 0, &#039;bright-red&#039; =&gt; 1, &#039;bright-green&#039; =&gt; 2, &#039;bright-yellow&#039; =&gt; 3, &#039;bright-blue&#039; =&gt; 4, &#039;bright-magenta&#039; =&gt; 5, &#039;bright-cyan&#039; =&gt; 6, &#039;bright-white&#039; =&gt; 7]|
|`AVAILABLE_OPTIONS`|private| |[&#039;bold&#039; =&gt; [&#039;set&#039; =&gt; 1, &#039;unset&#039; =&gt; 22], &#039;underscore&#039; =&gt; [&#039;set&#039; =&gt; 4, &#039;unset&#039; =&gt; 24], &#039;blink&#039; =&gt; [&#039;set&#039; =&gt; 5, &#039;unset&#039; =&gt; 25], &#039;reverse&#039; =&gt; [&#039;set&#039; =&gt; 7, &#039;unset&#039; =&gt; 27], &#039;conceal&#039; =&gt; [&#039;set&#039; =&gt; 8, &#039;unset&#039; =&gt; 28]]|

## Properties


### foreground



```php
private $foreground
```






***

### background



```php
private $background
```






***

### options



```php
private $options
```






***

## Methods


### __construct



```php
public __construct(string $foreground = &#039;&#039;, string $background = &#039;&#039;, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$foreground` | **string** |  |
| `$background` | **string** |  |
| `$options` | **array** |  |




***

### apply



```php
public apply(string $text): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |




***

### set



```php
public set(): string
```











***

### unset



```php
public unset(): string
```











***

### parseColor



```php
private parseColor(string $color, bool $background = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |
| `$background` | **bool** |  |




***

### convertHexColorToAnsi



```php
private convertHexColorToAnsi(int $color): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **int** |  |




***

### degradeHexColorToAnsi



```php
private degradeHexColorToAnsi(int $r, int $g, int $b): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$r` | **int** |  |
| `$g` | **int** |  |
| `$b` | **int** |  |




***

### getSaturation



```php
private getSaturation(int $r, int $g, int $b): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$r` | **int** |  |
| `$g` | **int** |  |
| `$b` | **int** |  |




***


***

