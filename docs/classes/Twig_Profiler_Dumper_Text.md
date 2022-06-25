***

# Twig_Profiler_Dumper_Text





* Full name: `\Twig_Profiler_Dumper_Text`
* Parent class: [`\Twig\Profiler\Dumper\TextDumper`](./Twig/Profiler/Dumper/TextDumper.md)






## Inherited methods


### formatTemplate



```php
protected formatTemplate(\Twig\Profiler\Profile $profile, mixed $prefix): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |




***

### formatNonTemplate



```php
protected formatNonTemplate(\Twig\Profiler\Profile $profile, mixed $prefix): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |




***

### formatTime



```php
protected formatTime(\Twig\Profiler\Profile $profile, mixed $percent): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$percent` | **mixed** |  |




***

### dump



```php
public dump(\Twig\Profiler\Profile $profile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |




***

### dumpProfile



```php
private dumpProfile(\Twig\Profiler\Profile $profile, mixed $prefix = &#039;&#039;, mixed $sibling = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |
| `$sibling` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
