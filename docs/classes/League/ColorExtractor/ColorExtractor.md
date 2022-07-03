***

# ColorExtractor





* Full name: `\League\ColorExtractor\ColorExtractor`



## Properties


### palette



```php
protected \League\ColorExtractor\Palette $palette
```






***

### sortedColors



```php
protected \SplFixedArray $sortedColors
```






***

## Methods


### __construct



```php
public __construct(\League\ColorExtractor\Palette $palette): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$palette` | **\League\ColorExtractor\Palette** |  |




***

### extract



```php
public extract(int $colorCount = 1): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$colorCount` | **int** |  |




***

### isInitialized



```php
protected isInitialized(): bool
```











***

### initialize



```php
protected initialize(): mixed
```











***

### mergeColors



```php
protected static mergeColors(\SplFixedArray $colors, int $limit, int $maxDelta): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$colors` | **\SplFixedArray** |  |
| `$limit` | **int** |  |
| `$maxDelta` | **int** |  |




***

### ciede2000DeltaE



```php
protected static ciede2000DeltaE(array $firstLabColor, array $secondLabColor): float
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$firstLabColor` | **array** |  |
| `$secondLabColor` | **array** |  |




***

### intColorToLab



```php
protected static intColorToLab(int $color): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **int** |  |




***

### rgbToSrgbStep



```php
protected static rgbToSrgbStep(int $value): float
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |




***

### rgbToSrgb



```php
protected static rgbToSrgb(array $rgb): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rgb` | **array** |  |




***

### srgbToXyz



```php
protected static srgbToXyz(array $rgb): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rgb` | **array** |  |




***

### xyzToLabStep



```php
protected static xyzToLabStep(float $value): float
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **float** |  |




***

### xyzToLab



```php
protected static xyzToLab(array $xyz): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xyz` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
