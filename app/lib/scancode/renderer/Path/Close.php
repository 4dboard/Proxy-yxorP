<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\Path;

final class Close implements OperationInterface
{
    /**
     * @var self|null
     */
    private static ?Close $instance;

    private function __construct()
    {
    }

    public static function instance(): self
    {
        return self::$instance ?: self::$instance = new self();
    }

    /**
     * @return self
     */
    public function translate(float $x, float $y): OperationInterface
    {
        return $this;
    }
}
