<?php

/*
 * This file is part of the colinodell/json5 package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Based on the official JSON5 implementation for JavaScript (https://github.com/json5/json5)
 *  - (c) 2012-2016 Aseem Kishore and others (https://github.com/json5/json5/contributors)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ColinODell\Json5;

use JetBrains\PhpStorm\Pure;
use JsonException;
use Throwable;
use function sprintf;

final class SyntaxError extends JsonException
{
    /** @var int */
    private int $lineNumber;

    /** @var int */
    private int $column;

    /**
     * SyntaxError constructor.
     *
     * @param string $message
     * @param int $linenumber
     * @param int $columnNumber
     * @param Throwable|null $previous
     */
    #[Pure] public function __construct(string $message, int $linenumber, $columnNumber, Throwable $previous = null)
    {
        $message = sprintf('%s at line %d column %d of the JSON5 data', $message, $linenumber, $columnNumber);

        parent::__construct($message, 0, $previous);

        $this->lineNumber = $linenumber;
        $this->column = $columnNumber;
    }

    /**
     * @return int
     */
    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }
}
