***

# Bcmath

Bcmath extension adapter



* Full name: `\Zend\Math\BigInteger\Adapter\Bcmath`
* This class implements:
[`\Zend\Math\BigInteger\Adapter\AdapterInterface`](./AdapterInterface.md)




## Methods


### __construct

Constructor
Sets Bcmath scale factor to zero

```php
public __construct(): mixed
```











***

### init

Create string representing big integer in decimal form from arbitrary integer format

```php
public init(string $operand, int|null $base = null): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |
| `$base` | **int&#124;null** |  |




***

### add

Add two big integers

```php
public add(string $leftOperand, string $rightOperand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### sub

Subtract two big integers

```php
public sub(string $leftOperand, string $rightOperand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### mul

Multiply two big integers

```php
public mul(string $leftOperand, string $rightOperand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### div

Divide two big integers and return integer part result.

```php
public div(string $leftOperand, string $rightOperand): string
```

Raises exception if the divisor is zero.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### pow

Raise a big integers to another

```php
public pow(string $operand, string $exp): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |
| `$exp` | **string** |  |




***

### sqrt

Get the square root of a big integer

```php
public sqrt(string $operand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |




***

### abs

Get absolute value of a big integer

```php
public abs(string $operand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |




***

### mod

Get modulus of a big integer

```php
public mod(string $leftOperand, string $rightOperand): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### powmod

Raise a big integer to another, reduced by a specified modulus

```php
public powmod(string $leftOperand, string $rightOperand, string $modulus): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |
| `$modulus` | **string** |  |




***

### comp

Compare two big integers and returns result as an integer where
Returns < 0 if leftOperand is less than rightOperand;
> 0 if leftOperand is greater than rightOperand, and 0 if they are equal.

```php
public comp(string $leftOperand, string $rightOperand): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftOperand` | **string** |  |
| `$rightOperand` | **string** |  |




***

### intToBin

Convert big integer into it's binary number representation

```php
public intToBin(string $operand, bool $twoc = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |
| `$twoc` | **bool** | return in two&#039;s complement form |




***

### binToInt

Convert big integer into it's binary number representation

```php
public binToInt(string $bytes, bool $twoc = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytes` | **string** |  |
| `$twoc` | **bool** | whether binary number is in twos&#039; complement form |




***

### baseConvert

Base conversion. Bases 2..62 are supported

```php
public baseConvert(string $operand, int $fromBase, int $toBase = 10): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operand` | **string** |  |
| `$fromBase` | **int** |  |
| `$toBase` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
