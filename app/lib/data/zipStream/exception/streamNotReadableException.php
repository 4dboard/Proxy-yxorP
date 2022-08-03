<?php

namespace yxorP\app\lib\zipStream\exception;

use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\zipStream\exception;

/**
 * This Exception gets invoked if fread() fails on a stream.
 *
 * @author Jonatan Männchen <jonatan@maennchen.ch>
 * @copyright Copyright (c) 2014, Jonatan Männchen
 */
class streamNotReadableException extends exception
{
    /**
     * Constructor of the Exception
     *
     * @param String fileName - The name of the file which the stream belongs to.
     */
    #[Pure] public function __construct($fileName)
    {
        parent::__construct("The stream for $fileName could not be read.");
    }
}
