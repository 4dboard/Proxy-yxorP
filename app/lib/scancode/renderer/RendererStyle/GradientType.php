<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\RendererStyle;

use yxorP\app\lib\enum\abstractEnum;

/**
 * @method static self VERTICAL()
 * @method static self HORIZONTAL()
 * @method static self DIAGONAL()
 * @method static self INVERSE_DIAGONAL()
 * @method static self RADIAL()
 */
final class GradientType extends abstractEnum
{
    protected const VERTICAL = null;
    protected const HORIZONTAL = null;
    protected const DIAGONAL = null;
    protected const INVERSE_DIAGONAL = null;
    protected const RADIAL = null;
}
