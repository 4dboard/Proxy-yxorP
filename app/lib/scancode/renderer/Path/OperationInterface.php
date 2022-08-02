<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\Path;

interface OperationInterface
{
    /**
     * Translates the operation's coordinates.
     */
    public function translate(float $x, float $y): self;
}
