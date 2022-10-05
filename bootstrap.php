<?php
/**
 * Creating a namespace called `yxorP`.
 */

namespace yxorP;
/**
 * Including the file `yxorP.php` in the current file.
 */

use yxorP\lib\yP;

require __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'yP.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'http' . DIRECTORY_SEPARATOR . 'store.php';

const PATH_CACHE_DIR = __DIR__ . DIRECTORY_SEPARATOR . DIR_APP . DIRECTORY_SEPARATOR . DIR_LIB . DIRECTORY_SEPARATOR . DIR_STORAGE . DIR_CACHE;
const PATH_CACHE_FILE = __DIR__ . DIRECTORY_SEPARATOR . DIR_APP . DIRECTORY_SEPARATOR . DIR_LIB . DIRECTORY_SEPARATOR . DIR_STORAGE . DIR_CACHE . CACHE_KEY . FILE_CACHE;
/**
 *  Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 *  Calling the `proxy()` method of the `yxorP` class.
 */

new yP(__DIR__);
