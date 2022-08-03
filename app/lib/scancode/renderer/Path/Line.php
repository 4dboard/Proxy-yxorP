<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\Path;

use JetBrains\PhpStorm\Pure;

final class Line implements OperationInterface
{
    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

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
    #[Pure] public function translate(float $x, float $y): OperationInterface
    {
        return new self($this->x + $x, $this->y + $y);
    }
}
