# Yxorp CMS Kint Addon

This addon extends Yxorp CMS (Next) core by providing debug functionality based on the  [Kint PHP Library](https://github.com/kint-php/kint/).

## Installation

Installation can be performed with or without php composer (But keep in mind that after downloaded/extracted the addon must be named Kint).

### Without php composer
1. Download zip and extract to 'your-yxorp-docroot/addons/Kint' (e.g. yxorpcms/addons/Kint)
2. Install Kint dependency using composer
```bash
$ cd your-yxorp-docroot/addons/Kint
$ composer install
```

### Using php composer
1. Install addon using composer
```bash
$ cd your-yxorp-docroot/addons
$ composer create-project pauloamgomes/yxorp-cms-kint Kint
```

## Configuration

No configuration is required.

## Usage

The Yxorp Kint is a developer addon, to be used for example when implementing your own addons, there are two basic methods:

1. **Dump** - will dump the variables to the screen
```php
$this->app->module('kint')->dump($var1, $var2, ...);
```
![Dump Example](https://monosnap.com/image/C1FThi1HjjLoel2KT0UGz6BdE3AnDJ.png)

2. **Console** - will dump the variables to the browser console
```php
$this->app->module('kint')->console($var1, $var2, ...);
```
![Console Example](https://monosnap.com/image/jGiLieSG0cmwYBluFMv2yrEddUz7io.png)

If the debug functions are called during an API request, the output will be logged using the HTTP headers instead:

![Headers](https://monosnap.com/image/6O4anzYhKpZwNdiFyKnXhEis6CWwAZ.png)


## Copyright and license

Copyright 2018 pauloamgomes under the MIT license.


