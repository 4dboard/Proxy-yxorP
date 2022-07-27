<?php
/**
 * Creating a namespace called `yxorP`.
 */

namespace yxorP;
/**
 * Including the file `yxorP.php` in the current file.
 */

use yxorP\app\yP;

require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'yP.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'http' . DIRECTORY_SEPARATOR . 'store.php';

/**
 *  Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 *  Calling the `proxy()` method of the `yxorP` class.
 */

new yP(__DIR__);