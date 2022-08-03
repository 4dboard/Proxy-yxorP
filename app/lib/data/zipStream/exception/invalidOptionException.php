<?php

namespace yxorP\app\lib\zipStream\exception;

use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\zipStream\exception;

/**
 * This Exception gets invoked if an invalid parameter gets passed on as option
 *
 * @author Jonatan Männchen <jonatan@maennchen.ch>
 * @copyright Copyright (c) 2014, Jonatan Männchen
 */
class invalidOptionException extends exception
{
    /**
     * Constructor of the Exception
     *
     * @param String $optionName - The name of the Option
     * @param string[] $expectedValues - All possible Values
     * @param String $givenValue
     */
    #[Pure] public function __construct($optionName, $expectedValues = array(), $givenValue)
    {
        parent::__construct("Invalid Option $optionName. EXPECTED: " . implode(", ",
                $expectedValues) . " GIVEN: $givenValue");
    }
}
