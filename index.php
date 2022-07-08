<?php

/* Creating a namespace called `yxorP`. */

namespace yxorP;

exit('12');
/* Including the file `yxorP.php` in the current file. */

require 'yxorP.php';

/**
 * Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 */
yxorP::proxy();
