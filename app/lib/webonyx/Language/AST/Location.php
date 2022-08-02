<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Language\AST;

use yxorP\app\lib\psr\graphQL\Language\Source;
use yxorP\app\lib\psr\graphQL\Language\Token;

/**
 * Contains a range of UTF-8 character offsets and token references that
 * identify the region of the source from which the AST derived.
 */
class Location
{
    /**
     * The character offset at which this Node begins.
     *
     * @var int
     */
    public $start;

    /**
     * The character offset at which this Node ends.
     *
     * @var int
     */
    public $end;

    /**
     * The Token at which this Node begins.
     *
     * @var Token|null
     */
    public $startToken;

    /**
     * The Token at which this Node ends.
     *
     * @var Token|null
     */
    public $endToken;

    /**
     * The Source document the AST represents.
     *
     * @var Source|null
     */
    public $source;

    public function __construct(?Token $startToken = null, ?Token $endToken = null, ?Source $source = null)
    {
        $this->startToken = $startToken;
        $this->endToken = $endToken;
        $this->source = $source;

        if ($startToken === null || $endToken === null) {
            return;
        }

        $this->start = $startToken->start;
        $this->end = $endToken->end;
    }

    /**
     * @param int $start
     * @param int $end
     *
     * @return static
     */
    public static function create($start, $end)
    {
        $tmp = new static();
        $tmp->start = $start;
        $tmp->end = $end;

        return $tmp;
    }
}
