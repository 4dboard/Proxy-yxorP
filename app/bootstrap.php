<?php
/* Creating a namespace called `yxorP`. */

namespace yxorP;
/* Including the file `yxorP.php` in the current file. */

require __DIR__ . '/yP.php';

/**
 *  Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 *  Calling the `proxy()` method of the `yxorP` class.
 */

new app\yP(__DIR__);
