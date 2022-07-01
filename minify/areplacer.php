<?php

namespace yxorP\Minify;

use function array_keys;
use function array_values;
use function preg_replace;
use function strlen;

require DIR_ROOT . 'minify/minfyInterface.php';

abstract /**
 *
 */
class areplacer
{
    public function process(string $buffer): string
    {
        if (strlen($buffer) === 0) {
            return '';
        }

        return $this->replace(
            $this->getReplacePatternData(),
            $buffer
        );
    }

    public function replace(array $replace, string $buffer): string
    {
        $result = preg_replace(
            array_keys($replace),
            array_values($replace),
            $buffer
        );

        return ($result === null) ? $buffer : $result;
    }

    abstract public function getReplacePatternData(): array;
}
