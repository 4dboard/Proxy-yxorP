<?php

namespace ZipStream\Exception;

use JetBrains\PhpStorm\Pure;
use ZipStream\Exception;

/**
 * This Exception gets invoked if a file wasn't found
 *
 * @author Jonatan Männchen <jonatan@maennchen.ch>
 * @copyright Copyright (c) 2014, Jonatan Männchen
 */
class FileNotFoundException extends Exception
{
    /**
     * Constructor of the Exception
     *
     * @param String $path - The path which wasn't found
     */
    #[Pure] public function __construct(string $path)
    {
        parent::__construct("Ths file with the path $path wasn't found.");
    }
}
