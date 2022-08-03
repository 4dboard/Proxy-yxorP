<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\RendererStyle;

use BaconQrCode\Exception\RuntimeException;
use BaconQrCode\Renderer\Color\ColorInterface;
use BaconQrCode\Renderer\Color\Gray;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\scancode\Renderer\Color\ColorInterface;
use yxorP\app\lib\scancode\Renderer\Color\Gray;

final class Fill
{
    /**
     * @var self|null
     */
    private static ?Fill $default;
    /**
     * @var ColorInterface
     */
    private \yxorP\app\lib\scancode\Renderer\RendererStyle\ColorInterface|ColorInterface $backgroundColor;
    /**
     * @var ColorInterface|null
     */
    private \yxorP\app\lib\scancode\Renderer\RendererStyle\ColorInterface|null|ColorInterface $foregroundColor;
    /**
     * @var Gradient|null
     */
    private ?Gradient $foregroundGradient;
    /**
     * @var EyeFill
     */
    private EyeFill $topLeftEyeFill;
    /**
     * @var EyeFill
     */
    private EyeFill $topRightEyeFill;
    /**
     * @var EyeFill
     */
    private EyeFill $bottomLeftEyeFill;

    private function __construct(
        ColorInterface  $backgroundColor,
        ?ColorInterface $foregroundColor,
        ?Gradient       $foregroundGradient,
        EyeFill         $topLeftEyeFill,
        EyeFill         $topRightEyeFill,
        EyeFill         $bottomLeftEyeFill
    )
    {
        $this->backgroundColor = $backgroundColor;
        $this->foregroundColor = $foregroundColor;
        $this->foregroundGradient = $foregroundGradient;
        $this->topLeftEyeFill = $topLeftEyeFill;
        $this->topRightEyeFill = $topRightEyeFill;
        $this->bottomLeftEyeFill = $bottomLeftEyeFill;
    }

    public static function default(): self
    {
        return self::$default ?: self::$default = self::uniformColor(new Gray(100), new Gray(0));
    }

    public static function uniformColor(ColorInterface $backgroundColor, ColorInterface $foregroundColor): self
    {
        return new self(
            $backgroundColor,
            $foregroundColor,
            null,
            EyeFill::inherit(),
            EyeFill::inherit(),
            EyeFill::inherit()
        );
    }

    #[Pure] public static function withForegroundColor(
        ColorInterface $backgroundColor,
        ColorInterface $foregroundColor,
        EyeFill        $topLeftEyeFill,
        EyeFill        $topRightEyeFill,
        EyeFill        $bottomLeftEyeFill
    ): self
    {
        return new self(
            $backgroundColor,
            $foregroundColor,
            null,
            $topLeftEyeFill,
            $topRightEyeFill,
            $bottomLeftEyeFill
        );
    }

    #[Pure] public static function withForegroundGradient(
        ColorInterface $backgroundColor,
        Gradient       $foregroundGradient,
        EyeFill        $topLeftEyeFill,
        EyeFill        $topRightEyeFill,
        EyeFill        $bottomLeftEyeFill
    ): self
    {
        return new self(
            $backgroundColor,
            null,
            $foregroundGradient,
            $topLeftEyeFill,
            $topRightEyeFill,
            $bottomLeftEyeFill
        );
    }

    public static function uniformGradient(ColorInterface $backgroundColor, Gradient $foregroundGradient): self
    {
        return new self(
            $backgroundColor,
            null,
            $foregroundGradient,
            EyeFill::inherit(),
            EyeFill::inherit(),
            EyeFill::inherit()
        );
    }

    public function hasGradientFill(): bool
    {
        return null !== $this->foregroundGradient;
    }

    public function getBackgroundColor(): ColorInterface
    {
        return $this->backgroundColor;
    }

    public function getForegroundColor(): ColorInterface
    {
        if (null === $this->foregroundColor) {
            throw new RuntimeException('Fill uses a gradient, thus no foreground color is available');
        }

        return $this->foregroundColor;
    }

    public function getForegroundGradient(): Gradient
    {
        if (null === $this->foregroundGradient) {
            throw new RuntimeException('Fill uses a single color, thus no foreground gradient is available');
        }

        return $this->foregroundGradient;
    }

    public function getTopLeftEyeFill(): EyeFill
    {
        return $this->topLeftEyeFill;
    }

    public function getTopRightEyeFill(): EyeFill
    {
        return $this->topRightEyeFill;
    }

    public function getBottomLeftEyeFill(): EyeFill
    {
        return $this->bottomLeftEyeFill;
    }
}
