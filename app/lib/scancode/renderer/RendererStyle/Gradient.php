<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\RendererStyle;

use BaconQrCode\Renderer\Color\ColorInterface;
use yxorP\app\lib\scancode\Renderer\Color\ColorInterface;

final class Gradient
{
    /**
     * @var ColorInterface
     */
    private \yxorP\app\lib\scancode\Renderer\RendererStyle\ColorInterface|\yxorP\app\lib\scancode\Renderer\Color\ColorInterface $startColor;

    /**
     * @var ColorInterface
     */
    private \yxorP\app\lib\scancode\Renderer\RendererStyle\ColorInterface|\yxorP\app\lib\scancode\Renderer\Color\ColorInterface $endColor;

    /**
     * @var GradientType
     */
    private GradientType $type;

    public function __construct(ColorInterface $startColor, ColorInterface $endColor, GradientType $type)
    {
        $this->startColor = $startColor;
        $this->endColor = $endColor;
        $this->type = $type;
    }

    public function getStartColor(): ColorInterface
    {
        return $this->startColor;
    }

    public function getEndColor(): ColorInterface
    {
        return $this->endColor;
    }

    public function getType(): GradientType
    {
        return $this->type;
    }
}
