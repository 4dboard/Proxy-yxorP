<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Polyfill\Php80;

use JetBrains\PhpStorm\Pure;
use Stringable;
use function in_array;
use function is_string;
use function ord;
use function strlen;
use const T_COMMENT;
use const T_DOC_COMMENT;
use const T_OPEN_TAG;
use const T_WHITESPACE;

/**
 * @author Fedonyuk Anton <info@ensostudio.ru>
 *
 * @internal
 */
class PhpToken implements Stringable
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $text;

    /**
     * @var int
     */
    public int $line;

    /**
     * @var int
     */
    public int $pos;

    public function __construct(int $id, string $text, int $line = -1, int $position = -1)
    {
        $this->id = $id;
        $this->text = $text;
        $this->line = $line;
        $this->pos = $position;
    }

    /**
     * @return static[]
     */
    #[Pure] public static function tokenize(string $code, int $flags = 0): array
    {
        $line = 1;
        $position = 0;
        $tokens = token_get_all($code, $flags);
        foreach ($tokens as $index => $token) {
            if (is_string($token)) {
                $id = ord($token);
                $text = $token;
            } else {
                [$id, $text, $line] = $token;
            }
            $tokens[$index] = new static($id, $text, $line, $position);
            $position += strlen($text);
        }

        return $tokens;
    }

    public function getTokenName(): ?string
    {
        if ('UNKNOWN' === $name = token_name($this->id)) {
            $name = strlen($this->text) > 1 || ord($this->text) < 32 ? null : $this->text;
        }

        return $name;
    }

    /**
     * @param array|int|string $kind
     */
    public function is(array|int|string $kind): bool
    {
        foreach ((array)$kind as $value) {
            if (in_array($value, [$this->id, $this->text], true)) {
                return true;
            }
        }

        return false;
    }

    public function isIgnorable(): bool
    {
        return in_array($this->id, [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT, T_OPEN_TAG], true);
    }

    public function __toString(): string
    {
        return $this->text;
    }
}
