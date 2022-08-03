<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\common;

use JetBrains\PhpStorm\Pure;

/**
 * Encapsulates a set of error-correction blocks in one symbol version.
 *
 * Most versions will use blocks of differing sizes within one version, so, this encapsulates the parameters for each
 * set of blocks. It also holds the number of error-correction codewords per block since it will be the same across all
 * blocks within one version.
 */
final class ecBlocks
{
    /**
     * Number of EC codewords per block.
     *
     * @var int
     */
    private int $ecCodewordsPerBlock;

    /**
     * List of EC blocks.
     *
     * @var ecBlock[]
     */
    private array $ecBlocks;

    public function __construct(int $ecCodewordsPerBlock, ecBlock ...$ecBlocks)
    {
        $this->ecCodewordsPerBlock = $ecCodewordsPerBlock;
        $this->ecBlocks = $ecBlocks;
    }

    /**
     * Returns the number of EC codewords per block.
     */
    public function getEcCodewordsPerBlock(): int
    {
        return $this->ecCodewordsPerBlock;
    }

    /**
     * Returns the total count of EC codewords.
     */
    #[Pure] public function getTotalEcCodewords(): int
    {
        return $this->ecCodewordsPerBlock * $this->getNumBlocks();
    }

    /**
     * Returns the total number of EC block appearances.
     */
    #[Pure] public function getNumBlocks(): int
    {
        $total = 0;

        foreach ($this->ecBlocks as $ecBlock) {
            $total += $ecBlock->getCount();
        }

        return $total;
    }

    /**
     * Returns the EC blocks included in this collection.
     *
     * @return ecBlock[]
     */
    public function getEcBlocks(): array
    {
        return $this->ecBlocks;
    }
}
