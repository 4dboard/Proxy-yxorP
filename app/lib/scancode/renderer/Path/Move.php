<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\Path;

use JetBrains\PhpStorm\Pure;

final class Move implements OperationInterface
{
    /**
     * @var float
     */
    private float $x;

    /**
     * @var float
     */
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @return self
     */
    #[Pure] #[Pure] #[Pure] public function translate(float $x, float $y): OperationInterface
    {
        return new self($this->x + $x, $this->y + $y);
    }
}
