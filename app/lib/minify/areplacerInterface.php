<?php namespace yxorP\app\lib\minify;

use function array_keys;
use function array_values;
use function preg_replace;
use function strlen;

abstract class areplacerInterface
{
    /**
     *
     */
    public function process(string $buffer): string
    {
        if (strlen($buffer) === 0) {
            return CHAR_EMPTY_STRING;
        }
        return $this->replace($this->getReplacePatternData(), $buffer);
    }

    /**
     *
     */
    public function replace(array $replace, string $buffer): string
    {
        $result = preg_replace(array_keys($replace), array_values($replace), $buffer);
        return ($result === null) ? $buffer : $result;
    }

    abstract public function getReplacePatternData(): array;
}