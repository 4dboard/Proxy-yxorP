<?php namespace yxorP\app\lib\mail;
use JetBrains\PhpStorm\Pure;

class Exception extends \Exception
{
    #[Pure] public function errorMessage(): string
    {
        return '<strong>' . htmlspecialchars($this->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
    }
}
