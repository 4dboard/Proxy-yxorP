***

# HashTiming

Author:
George Argyros <argyros.george@gmail.com>

Copyright (c) 2012, George Argyros All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
following conditions are met:

* Redistributions of source code must retain the above copyright notice, this list of conditions and the following
  disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following
  disclaimer in the documentation and/or other materials provided with the distribution.
* Neither the name of the <organization> nor the names of its contributors may be used to endorse or promote products
  derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL GEORGE ARGYROS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.

The function is providing, at least at the systems tested :), $len bytes of entropy under any PHP installation or
operating system. The execution time should be at most 10-20 ms in any system.

Modified by Padraic Brady as part of Zend Framework to use 25% of the original version's iterations.

* Full name: `\Zend\Math\Source\HashTiming`
* This class implements:
  [`\RandomLib\Source`](../../../RandomLib/Source.md)

## Methods

### getStrength

Return an instance of Strength indicating the strength of the source

```php
public static getStrength(): \SecurityLib\Strength
```

* This method is **static**.

**Return Value:**

An instance of one of the strength classes



***

### generate

Generate a random string of the specified size

```php
public generate(int $size): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** | The size of the requested random string |

**Return Value:**

A string of the requested size yxorP::get('REQUEST')
