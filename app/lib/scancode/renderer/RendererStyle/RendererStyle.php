<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\RendererStyle;

use BaconQrCode\Renderer\Eye\EyeInterface;
use BaconQrCode\Renderer\Eye\ModuleEye;
use BaconQrCode\Renderer\Module\ModuleInterface;
use BaconQrCode\Renderer\Module\SquareModule;
use yxorP\app\lib\scancode\Renderer\Module\ModuleInterface;
use yxorP\app\lib\scancode\Renderer\Module\SquareModule;

final class RendererStyle
{
    /**
     * @var int
     */
    private int $size;

    /**
     * @var int
     */
    private int $margin;

    /**
     * @var ModuleInterface
     */
    private \yxorP\app\lib\scancode\Renderer\RendererStyle\ModuleInterface|ModuleInterface $module;

    /**
     * @var EyeInterface|null
     */
    private EyeInterface|ModuleEye|null $eye;

    /**
     * @var Fill
     */
    private Fill $fill;

    public function __construct(
        int              $size,
        int              $margin = 4,
        ?ModuleInterface $module = null,
        ?EyeInterface    $eye = null,
        ?Fill            $fill = null
    )
    {
        $this->margin = $margin;
        $this->size = $size;
        $this->module = $module ?: SquareModule::instance();
        $this->eye = $eye ?: new ModuleEye($this->module);
        $this->fill = $fill ?: Fill::default();
    }

    public function withSize(int $size): self
    {
        $style = clone $this;
        $style->size = $size;
        return $style;
    }

    public function withMargin(int $margin): self
    {
        $style = clone $this;
        $style->margin = $margin;
        return $style;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getMargin(): int
    {
        return $this->margin;
    }

    public function getModule(): ModuleInterface
    {
        return $this->module;
    }

    public function getEye(): EyeInterface
    {
        return $this->eye;
    }

    public function getFill(): Fill
    {
        return $this->fill;
    }
}
