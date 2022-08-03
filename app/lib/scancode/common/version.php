<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\common;

use BaconQrCode\Exception\InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use SplFixedArray;

/**
 * Version representation.
 */
final class version
{
    private const VERSION_DECODE_INFO = [
        0x07c94,
        0x085bc,
        0x09a99,
        0x0a4d3,
        0x0bbf6,
        0x0c762,
        0x0d847,
        0x0e60d,
        0x0f928,
        0x10b78,
        0x1145d,
        0x12a17,
        0x13532,
        0x149a6,
        0x15683,
        0x168c9,
        0x177ec,
        0x18ec4,
        0x191e1,
        0x1afab,
        0x1b08e,
        0x1cc1a,
        0x1d33f,
        0x1ed75,
        0x1f250,
        0x209d5,
        0x216f0,
        0x228ba,
        0x2379f,
        0x24b0b,
        0x2542e,
        0x26a64,
        0x27541,
        0x28c69,
    ];
    /**
     * Cached version instances.
     *
     * @var array<int, self>|null
     */
    private static ?array $versions;
    /**
     * Version number of this version.
     *
     * @var int
     */
    private int $versionNumber;
    /**
     * Alignment pattern centers.
     *
     * @var SplFixedArray|array
     */
    private SplFixedArray|array $alignmentPatternCenters;
    /**
     * Error correction blocks.
     *
     * @var ecBlocks[]
     */
    private array $ecBlocks;
    /**
     * Total number of codewords.
     *
     * @var int|float
     */
    private int|float $totalCodewords;

    /**
     * @param int[] $alignmentPatternCenters
     */
    #[Pure] private function __construct(
        int      $versionNumber,
        array    $alignmentPatternCenters,
        ecBlocks ...$ecBlocks
    )
    {
        $this->versionNumber = $versionNumber;
        $this->alignmentPatternCenters = $alignmentPatternCenters;
        $this->ecBlocks = $ecBlocks;

        $totalCodewords = 0;
        $ecCodewords = $ecBlocks[0]->getEcCodewordsPerBlock();

        foreach ($ecBlocks[0]->getEcBlocks() as $ecBlock) {
            $totalCodewords += $ecBlock->getCount() * ($ecBlock->getDataCodewords() + $ecCodewords);
        }

        $this->totalCodewords = $totalCodewords;
    }

    /**
     * Gets a provisional version number for a specific dimension.
     *
     * @throws InvalidArgumentException if dimension is not 1 mod 4
     */
    public static function getProvisionalVersionForDimension(int $dimension): self
    {
        if (1 !== $dimension % 4) {
            throw new InvalidArgumentException('Dimension is not 1 mod 4');
        }

        return self::getVersionForNumber(intdiv($dimension - 17, 4));
    }

    /**
     * Gets a version instance for a specific version number.
     *
     * @throws InvalidArgumentException if version number is out of range
     */
    public static function getVersionForNumber(int $versionNumber): self
    {
        if ($versionNumber < 1 || $versionNumber > 40) {
            throw new InvalidArgumentException('Version number must be between 1 and 40');
        }

        return self::versions()[$versionNumber - 1];
    }

    /**
     * Build and cache a specific version.
     *
     * See ISO 18004:2006 6.5.1 Table 9.
     *
     * @return array<int, self>
     */
    private static function versions(): array
    {
        if (null !== self::$versions) {
            return self::$versions;
        }

        return self::$versions = [
            new self(
                1,
                [],
                new ecBlocks(7, new ecBlock(1, 19)),
                new ecBlocks(10, new ecBlock(1, 16)),
                new ecBlocks(13, new ecBlock(1, 13)),
                new ecBlocks(17, new ecBlock(1, 9))
            ),
            new self(
                2,
                [6, 18],
                new ecBlocks(10, new ecBlock(1, 34)),
                new ecBlocks(16, new ecBlock(1, 28)),
                new ecBlocks(22, new ecBlock(1, 22)),
                new ecBlocks(28, new ecBlock(1, 16))
            ),
            new self(
                3,
                [6, 22],
                new ecBlocks(15, new ecBlock(1, 55)),
                new ecBlocks(26, new ecBlock(1, 44)),
                new ecBlocks(18, new ecBlock(2, 17)),
                new ecBlocks(22, new ecBlock(2, 13))
            ),
            new self(
                4,
                [6, 26],
                new ecBlocks(20, new ecBlock(1, 80)),
                new ecBlocks(18, new ecBlock(2, 32)),
                new ecBlocks(26, new ecBlock(3, 24)),
                new ecBlocks(16, new ecBlock(4, 9))
            ),
            new self(
                5,
                [6, 30],
                new ecBlocks(26, new ecBlock(1, 108)),
                new ecBlocks(24, new ecBlock(2, 43)),
                new ecBlocks(18, new ecBlock(2, 15), new ecBlock(2, 16)),
                new ecBlocks(22, new ecBlock(2, 11), new ecBlock(2, 12))
            ),
            new self(
                6,
                [6, 34],
                new ecBlocks(18, new ecBlock(2, 68)),
                new ecBlocks(16, new ecBlock(4, 27)),
                new ecBlocks(24, new ecBlock(4, 19)),
                new ecBlocks(28, new ecBlock(4, 15))
            ),
            new self(
                7,
                [6, 22, 38],
                new ecBlocks(20, new ecBlock(2, 78)),
                new ecBlocks(18, new ecBlock(4, 31)),
                new ecBlocks(18, new ecBlock(2, 14), new ecBlock(4, 15)),
                new ecBlocks(26, new ecBlock(4, 13), new ecBlock(1, 14))
            ),
            new self(
                8,
                [6, 24, 42],
                new ecBlocks(24, new ecBlock(2, 97)),
                new ecBlocks(22, new ecBlock(2, 38), new ecBlock(2, 39)),
                new ecBlocks(22, new ecBlock(4, 18), new ecBlock(2, 19)),
                new ecBlocks(26, new ecBlock(4, 14), new ecBlock(2, 15))
            ),
            new self(
                9,
                [6, 26, 46],
                new ecBlocks(30, new ecBlock(2, 116)),
                new ecBlocks(22, new ecBlock(3, 36), new ecBlock(2, 37)),
                new ecBlocks(20, new ecBlock(4, 16), new ecBlock(4, 17)),
                new ecBlocks(24, new ecBlock(4, 12), new ecBlock(4, 13))
            ),
            new self(
                10,
                [6, 28, 50],
                new ecBlocks(18, new ecBlock(2, 68), new ecBlock(2, 69)),
                new ecBlocks(26, new ecBlock(4, 43), new ecBlock(1, 44)),
                new ecBlocks(24, new ecBlock(6, 19), new ecBlock(2, 20)),
                new ecBlocks(28, new ecBlock(6, 15), new ecBlock(2, 16))
            ),
            new self(
                11,
                [6, 30, 54],
                new ecBlocks(20, new ecBlock(4, 81)),
                new ecBlocks(30, new ecBlock(1, 50), new ecBlock(4, 51)),
                new ecBlocks(28, new ecBlock(4, 22), new ecBlock(4, 23)),
                new ecBlocks(24, new ecBlock(3, 12), new ecBlock(8, 13))
            ),
            new self(
                12,
                [6, 32, 58],
                new ecBlocks(24, new ecBlock(2, 92), new ecBlock(2, 93)),
                new ecBlocks(22, new ecBlock(6, 36), new ecBlock(2, 37)),
                new ecBlocks(26, new ecBlock(4, 20), new ecBlock(6, 21)),
                new ecBlocks(28, new ecBlock(7, 14), new ecBlock(4, 15))
            ),
            new self(
                13,
                [6, 34, 62],
                new ecBlocks(26, new ecBlock(4, 107)),
                new ecBlocks(22, new ecBlock(8, 37), new ecBlock(1, 38)),
                new ecBlocks(24, new ecBlock(8, 20), new ecBlock(4, 21)),
                new ecBlocks(22, new ecBlock(12, 11), new ecBlock(4, 12))
            ),
            new self(
                14,
                [6, 26, 46, 66],
                new ecBlocks(30, new ecBlock(3, 115), new ecBlock(1, 116)),
                new ecBlocks(24, new ecBlock(4, 40), new ecBlock(5, 41)),
                new ecBlocks(20, new ecBlock(11, 16), new ecBlock(5, 17)),
                new ecBlocks(24, new ecBlock(11, 12), new ecBlock(5, 13))
            ),
            new self(
                15,
                [6, 26, 48, 70],
                new ecBlocks(22, new ecBlock(5, 87), new ecBlock(1, 88)),
                new ecBlocks(24, new ecBlock(5, 41), new ecBlock(5, 42)),
                new ecBlocks(30, new ecBlock(5, 24), new ecBlock(7, 25)),
                new ecBlocks(24, new ecBlock(11, 12), new ecBlock(7, 13))
            ),
            new self(
                16,
                [6, 26, 50, 74],
                new ecBlocks(24, new ecBlock(5, 98), new ecBlock(1, 99)),
                new ecBlocks(28, new ecBlock(7, 45), new ecBlock(3, 46)),
                new ecBlocks(24, new ecBlock(15, 19), new ecBlock(2, 20)),
                new ecBlocks(30, new ecBlock(3, 15), new ecBlock(13, 16))
            ),
            new self(
                17,
                [6, 30, 54, 78],
                new ecBlocks(28, new ecBlock(1, 107), new ecBlock(5, 108)),
                new ecBlocks(28, new ecBlock(10, 46), new ecBlock(1, 47)),
                new ecBlocks(28, new ecBlock(1, 22), new ecBlock(15, 23)),
                new ecBlocks(28, new ecBlock(2, 14), new ecBlock(17, 15))
            ),
            new self(
                18,
                [6, 30, 56, 82],
                new ecBlocks(30, new ecBlock(5, 120), new ecBlock(1, 121)),
                new ecBlocks(26, new ecBlock(9, 43), new ecBlock(4, 44)),
                new ecBlocks(28, new ecBlock(17, 22), new ecBlock(1, 23)),
                new ecBlocks(28, new ecBlock(2, 14), new ecBlock(19, 15))
            ),
            new self(
                19,
                [6, 30, 58, 86],
                new ecBlocks(28, new ecBlock(3, 113), new ecBlock(4, 114)),
                new ecBlocks(26, new ecBlock(3, 44), new ecBlock(11, 45)),
                new ecBlocks(26, new ecBlock(17, 21), new ecBlock(4, 22)),
                new ecBlocks(26, new ecBlock(9, 13), new ecBlock(16, 14))
            ),
            new self(
                20,
                [6, 34, 62, 90],
                new ecBlocks(28, new ecBlock(3, 107), new ecBlock(5, 108)),
                new ecBlocks(26, new ecBlock(3, 41), new ecBlock(13, 42)),
                new ecBlocks(30, new ecBlock(15, 24), new ecBlock(5, 25)),
                new ecBlocks(28, new ecBlock(15, 15), new ecBlock(10, 16))
            ),
            new self(
                21,
                [6, 28, 50, 72, 94],
                new ecBlocks(28, new ecBlock(4, 116), new ecBlock(4, 117)),
                new ecBlocks(26, new ecBlock(17, 42)),
                new ecBlocks(28, new ecBlock(17, 22), new ecBlock(6, 23)),
                new ecBlocks(30, new ecBlock(19, 16), new ecBlock(6, 17))
            ),
            new self(
                22,
                [6, 26, 50, 74, 98],
                new ecBlocks(28, new ecBlock(2, 111), new ecBlock(7, 112)),
                new ecBlocks(28, new ecBlock(17, 46)),
                new ecBlocks(30, new ecBlock(7, 24), new ecBlock(16, 25)),
                new ecBlocks(24, new ecBlock(34, 13))
            ),
            new self(
                23,
                [6, 30, 54, 78, 102],
                new ecBlocks(30, new ecBlock(4, 121), new ecBlock(5, 122)),
                new ecBlocks(28, new ecBlock(4, 47), new ecBlock(14, 48)),
                new ecBlocks(30, new ecBlock(11, 24), new ecBlock(14, 25)),
                new ecBlocks(30, new ecBlock(16, 15), new ecBlock(14, 16))
            ),
            new self(
                24,
                [6, 28, 54, 80, 106],
                new ecBlocks(30, new ecBlock(6, 117), new ecBlock(4, 118)),
                new ecBlocks(28, new ecBlock(6, 45), new ecBlock(14, 46)),
                new ecBlocks(30, new ecBlock(11, 24), new ecBlock(16, 25)),
                new ecBlocks(30, new ecBlock(30, 16), new ecBlock(2, 17))
            ),
            new self(
                25,
                [6, 32, 58, 84, 110],
                new ecBlocks(26, new ecBlock(8, 106), new ecBlock(4, 107)),
                new ecBlocks(28, new ecBlock(8, 47), new ecBlock(13, 48)),
                new ecBlocks(30, new ecBlock(7, 24), new ecBlock(22, 25)),
                new ecBlocks(30, new ecBlock(22, 15), new ecBlock(13, 16))
            ),
            new self(
                26,
                [6, 30, 58, 86, 114],
                new ecBlocks(28, new ecBlock(10, 114), new ecBlock(2, 115)),
                new ecBlocks(28, new ecBlock(19, 46), new ecBlock(4, 47)),
                new ecBlocks(28, new ecBlock(28, 22), new ecBlock(6, 23)),
                new ecBlocks(30, new ecBlock(33, 16), new ecBlock(4, 17))
            ),
            new self(
                27,
                [6, 34, 62, 90, 118],
                new ecBlocks(30, new ecBlock(8, 122), new ecBlock(4, 123)),
                new ecBlocks(28, new ecBlock(22, 45), new ecBlock(3, 46)),
                new ecBlocks(30, new ecBlock(8, 23), new ecBlock(26, 24)),
                new ecBlocks(30, new ecBlock(12, 15), new ecBlock(28, 16))
            ),
            new self(
                28,
                [6, 26, 50, 74, 98, 122],
                new ecBlocks(30, new ecBlock(3, 117), new ecBlock(10, 118)),
                new ecBlocks(28, new ecBlock(3, 45), new ecBlock(23, 46)),
                new ecBlocks(30, new ecBlock(4, 24), new ecBlock(31, 25)),
                new ecBlocks(30, new ecBlock(11, 15), new ecBlock(31, 16))
            ),
            new self(
                29,
                [6, 30, 54, 78, 102, 126],
                new ecBlocks(30, new ecBlock(7, 116), new ecBlock(7, 117)),
                new ecBlocks(28, new ecBlock(21, 45), new ecBlock(7, 46)),
                new ecBlocks(30, new ecBlock(1, 23), new ecBlock(37, 24)),
                new ecBlocks(30, new ecBlock(19, 15), new ecBlock(26, 16))
            ),
            new self(
                30,
                [6, 26, 52, 78, 104, 130],
                new ecBlocks(30, new ecBlock(5, 115), new ecBlock(10, 116)),
                new ecBlocks(28, new ecBlock(19, 47), new ecBlock(10, 48)),
                new ecBlocks(30, new ecBlock(15, 24), new ecBlock(25, 25)),
                new ecBlocks(30, new ecBlock(23, 15), new ecBlock(25, 16))
            ),
            new self(
                31,
                [6, 30, 56, 82, 108, 134],
                new ecBlocks(30, new ecBlock(13, 115), new ecBlock(3, 116)),
                new ecBlocks(28, new ecBlock(2, 46), new ecBlock(29, 47)),
                new ecBlocks(30, new ecBlock(42, 24), new ecBlock(1, 25)),
                new ecBlocks(30, new ecBlock(23, 15), new ecBlock(28, 16))
            ),
            new self(
                32,
                [6, 34, 60, 86, 112, 138],
                new ecBlocks(30, new ecBlock(17, 115)),
                new ecBlocks(28, new ecBlock(10, 46), new ecBlock(23, 47)),
                new ecBlocks(30, new ecBlock(10, 24), new ecBlock(35, 25)),
                new ecBlocks(30, new ecBlock(19, 15), new ecBlock(35, 16))
            ),
            new self(
                33,
                [6, 30, 58, 86, 114, 142],
                new ecBlocks(30, new ecBlock(17, 115), new ecBlock(1, 116)),
                new ecBlocks(28, new ecBlock(14, 46), new ecBlock(21, 47)),
                new ecBlocks(30, new ecBlock(29, 24), new ecBlock(19, 25)),
                new ecBlocks(30, new ecBlock(11, 15), new ecBlock(46, 16))
            ),
            new self(
                34,
                [6, 34, 62, 90, 118, 146],
                new ecBlocks(30, new ecBlock(13, 115), new ecBlock(6, 116)),
                new ecBlocks(28, new ecBlock(14, 46), new ecBlock(23, 47)),
                new ecBlocks(30, new ecBlock(44, 24), new ecBlock(7, 25)),
                new ecBlocks(30, new ecBlock(59, 16), new ecBlock(1, 17))
            ),
            new self(
                35,
                [6, 30, 54, 78, 102, 126, 150],
                new ecBlocks(30, new ecBlock(12, 121), new ecBlock(7, 122)),
                new ecBlocks(28, new ecBlock(12, 47), new ecBlock(26, 48)),
                new ecBlocks(30, new ecBlock(39, 24), new ecBlock(14, 25)),
                new ecBlocks(30, new ecBlock(22, 15), new ecBlock(41, 16))
            ),
            new self(
                36,
                [6, 24, 50, 76, 102, 128, 154],
                new ecBlocks(30, new ecBlock(6, 121), new ecBlock(14, 122)),
                new ecBlocks(28, new ecBlock(6, 47), new ecBlock(34, 48)),
                new ecBlocks(30, new ecBlock(46, 24), new ecBlock(10, 25)),
                new ecBlocks(30, new ecBlock(2, 15), new ecBlock(64, 16))
            ),
            new self(
                37,
                [6, 28, 54, 80, 106, 132, 158],
                new ecBlocks(30, new ecBlock(17, 122), new ecBlock(4, 123)),
                new ecBlocks(28, new ecBlock(29, 46), new ecBlock(14, 47)),
                new ecBlocks(30, new ecBlock(49, 24), new ecBlock(10, 25)),
                new ecBlocks(30, new ecBlock(24, 15), new ecBlock(46, 16))
            ),
            new self(
                38,
                [6, 32, 58, 84, 110, 136, 162],
                new ecBlocks(30, new ecBlock(4, 122), new ecBlock(18, 123)),
                new ecBlocks(28, new ecBlock(13, 46), new ecBlock(32, 47)),
                new ecBlocks(30, new ecBlock(48, 24), new ecBlock(14, 25)),
                new ecBlocks(30, new ecBlock(42, 15), new ecBlock(32, 16))
            ),
            new self(
                39,
                [6, 26, 54, 82, 110, 138, 166],
                new ecBlocks(30, new ecBlock(20, 117), new ecBlock(4, 118)),
                new ecBlocks(28, new ecBlock(40, 47), new ecBlock(7, 48)),
                new ecBlocks(30, new ecBlock(43, 24), new ecBlock(22, 25)),
                new ecBlocks(30, new ecBlock(10, 15), new ecBlock(67, 16))
            ),
            new self(
                40,
                [6, 30, 58, 86, 114, 142, 170],
                new ecBlocks(30, new ecBlock(19, 118), new ecBlock(6, 119)),
                new ecBlocks(28, new ecBlock(18, 47), new ecBlock(31, 48)),
                new ecBlocks(30, new ecBlock(34, 24), new ecBlock(34, 25)),
                new ecBlocks(30, new ecBlock(20, 15), new ecBlock(61, 16))
            ),
        ];
    }

    /**
     * Decodes version information from an integer and returns the version.
     */
    public static function decodeVersionInformation(int $versionBits): ?self
    {
        $bestDifference = PHP_INT_MAX;
        $bestVersion = 0;

        foreach (self::VERSION_DECODE_INFO as $i => $targetVersion) {
            if ($targetVersion === $versionBits) {
                return self::getVersionForNumber($i + 7);
            }

            $bitsDifference = formatInformation::numBitsDiffering($versionBits, $targetVersion);

            if ($bitsDifference < $bestDifference) {
                $bestVersion = $i + 7;
                $bestDifference = $bitsDifference;
            }
        }

        if ($bestDifference <= 3) {
            return self::getVersionForNumber($bestVersion);
        }

        return null;
    }

    /**
     * Returns the version number.
     */
    public function getVersionNumber(): int
    {
        return $this->versionNumber;
    }

    /**
     * Returns the alignment pattern centers.
     *
     * @return int[]
     */
    public function getAlignmentPatternCenters(): array
    {
        return $this->alignmentPatternCenters;
    }

    /**
     * Returns the total number of codewords.
     */
    public function getTotalCodewords(): int
    {
        return $this->totalCodewords;
    }

    /**
     * Returns the number of EC blocks for a specific EC level.
     */
    #[Pure] public function getEcBlocksForLevel(errorCorrectionLevel $ecLevel): ecBlocks
    {
        return $this->ecBlocks[$ecLevel->ordinal()];
    }

    /**
     * Builds the function pattern for the current version.
     */
    public function buildFunctionPattern(): bitMatrix
    {
        $dimension = $this->getDimensionForVersion();
        $bitMatrix = new bitMatrix($dimension);

        // Top left finder pattern + separator + format
        $bitMatrix->setRegion(0, 0, 9, 9);
        // Top right finder pattern + separator + format
        $bitMatrix->setRegion($dimension - 8, 0, 8, 9);
        // Bottom left finder pattern + separator + format
        $bitMatrix->setRegion(0, $dimension - 8, 9, 8);

        // Alignment patterns
        $max = count($this->alignmentPatternCenters);

        for ($x = 0; $x < $max; ++$x) {
            $i = $this->alignmentPatternCenters[$x] - 2;

            for ($y = 0; $y < $max; ++$y) {
                if (($x === 0 && ($y === 0 || $y === $max - 1)) || ($x === $max - 1 && $y === 0)) {
                    // No alignment patterns near the three finder paterns
                    continue;
                }

                $bitMatrix->setRegion($this->alignmentPatternCenters[$y] - 2, $i, 5, 5);
            }
        }

        // Vertical timing pattern
        $bitMatrix->setRegion(6, 9, 1, $dimension - 17);
        // Horizontal timing pattern
        $bitMatrix->setRegion(9, 6, $dimension - 17, 1);

        if ($this->versionNumber > 6) {
            // Version info, top right
            $bitMatrix->setRegion($dimension - 11, 0, 3, 6);
            // Version info, bottom left
            $bitMatrix->setRegion(0, $dimension - 11, 6, 3);
        }

        return $bitMatrix;
    }

    /**
     * Calculates the dimension for the current version.
     */
    public function getDimensionForVersion(): int
    {
        return 17 + 4 * $this->versionNumber;
    }

    /**
     * Returns a string representation for the version.
     */
    public function __toString(): string
    {
        return (string)$this->versionNumber;
    }
}
