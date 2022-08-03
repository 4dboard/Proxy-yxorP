<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;
use yxorP\app\lib\scancode\Renderer\Path\Path;

/**
 * Combines the style of two different eyes.
 */
final class CompositeEye implements EyeInterface
{
    /**
     * @var EyeInterface
     */
    private EyeInterface $externalEye;

    /**
     * @var EyeInterface
     */
    private EyeInterface $internalEye;

    public function __construct(EyeInterface $externalEye, EyeInterface $internalEye)
    {
        $this->externalEye = $externalEye;
        $this->internalEye = $internalEye;
    }

    public function getExternalPath(): Path
    {
        return $this->externalEye->getExternalPath();
    }

    public function getInternalPath(): Path
    {
        return $this->internalEye->getInternalPath();
    }
}
