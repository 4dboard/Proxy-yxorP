***

# PlainTextRenderer





* Full name: `\BaconQrCode\Renderer\PlainTextRenderer`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\BaconQrCode\Renderer\RendererInterface`](./RendererInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FULL_BLOCK`|private| |&quot;█&quot;|
|`UPPER_HALF_BLOCK`|private| |&quot;▀&quot;|
|`LOWER_HALF_BLOCK`|private| |&quot;▄&quot;|
|`EMPTY_BLOCK`|private| |&quot; &quot;|

## Properties


### margin



```php
private int $margin
```






***

## Methods


### __construct



```php
public __construct(int $margin = 2): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$margin` | **int** |  |




***

### render



```php
public render(\BaconQrCode\Encoder\QrCode $qrCode): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$qrCode` | **\BaconQrCode\Encoder\QrCode** |  |




***


***

