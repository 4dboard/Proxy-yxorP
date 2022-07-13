<?php

namespace ZipStream\Exception;

use JetBrains\PhpStorm\Pure;
use ZipStream\Exception;

/**
 * This Exception gets invoked if an invalid parameter gets passed on as option
 *
 * @author Jonatan Männchen <jonatan@maennchen.ch>
 * @copyright Copyright (c) 2014, Jonatan Männchen
 */
class InvalidOptionException extends Exception
{
    /**
     * Constructor of the Exception
     *
     * @param String $optionName - The name of the Option
     * @param string[] $expectedValues - All possible Values
     * @param String $givenValue
     */
    #[Pure] public function __construct(string $optionName, $expectedValues = array(), $givenValue)
    {
        parent::__construct("Invalid Option $optionName. EXPECTED: " . implode(", ",
                $expectedValues) . " GIVEN: $givenValue");
    }
}
