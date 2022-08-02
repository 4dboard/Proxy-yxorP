<?php

namespace yxorP\app\lib\zipStream\exception;

use yxorP\app\lib\zipStream\exception;

/**
 * This Exception gets invoked if a file wasn't found
 *
 * @author Jonatan Männchen <jonatan@maennchen.ch>
 * @copyright Copyright (c) 2014, Jonatan Männchen
 */
class fileNotFoundException extends exception
{
    /**
     * Constructor of the Exception
     *
     * @param String $path - The path which wasn't found
     */
    public function __construct($path)
    {
        parent::__construct("Ths file with the path $path wasn't found.");
    }
}
