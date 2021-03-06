<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\common;

/**
 * Encapsulates the parameters for one error-correction block in one symbol version.
 *
 * This includes the number of data codewords, and the number of times a block with these parameters is used
 * consecutively in the QR code version's format.
 */
final class ecBlock
{
    /**
     * How many times the block is used.
     *
     * @var int
     */
    private int $count;

    /**
     * Number of data codewords.
     *
     * @var int
     */
    private int $dataCodewords;

    public function __construct(int $count, int $dataCodewords)
    {
        $this->count = $count;
        $this->dataCodewords = $dataCodewords;
    }

    /**
     * Returns how many times the block is used.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Returns the number of data codewords.
     */
    public function getDataCodewords(): int
    {
        return $this->dataCodewords;
    }
}
