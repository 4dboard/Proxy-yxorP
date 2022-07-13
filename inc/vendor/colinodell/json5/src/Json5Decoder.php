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

use JsonException;
use stdClass;
use Throwable;
use function chr;
use function hexdec;
use function is_finite;
use function is_numeric;
use function json_decode;
use function json_last_error;
use function mb_strlen;
use function mb_substr;
use function ord;
use function preg_match;
use function sprintf;
use function strlen;
use function strpos;
use function substr;
use const JSON_BIGINT_AS_STRING;
use const JSON_ERROR_NONE;
use const JSON_OBJECT_AS_ARRAY;

final class Json5Decoder
{
    private string $json;

    private int $length;

    private int $at = 0;

    private ?string $currentByte;

    private int $lineNumber = 1;

    private bool $associative = false;

    private int $maxDepth = 512;

    private bool $castBigIntToString = false;

    private int $depth = 1;

    private int $currentLineStartsAt = 0;

    /**
     * Private constructor.
     *
     * @param string $json
     * @param bool $associative
     * @param int $depth
     * @param bool $castBigIntToString
     */
    private function __construct(string $json, bool $associative = false, int $depth = 512, bool $castBigIntToString = false)
    {
        $this->json = $json;
        $this->associative = $associative;
        $this->maxDepth = $depth;
        $this->castBigIntToString = $castBigIntToString;

        $this->length = strlen($json);
        $this->currentByte = $this->getByte(0);
    }

    /**
     * @param int $at
     *
     * @return null
     */
    private function getByte(int $at): ?string
    {
        if ($at >= $this->length) {
            return null;
        }

        return $this->json[$at];
    }

    /**
     * Takes a JSON encoded string and converts it into a PHP variable.
     *
     * The parameters exactly match PHP's json_decode() function - see
     * http://php.net/manual/en/function.json-decode.php for more information.
     *
     * @param string $source The JSON string being decoded.
     * @param bool $associative When TRUE, returned objects will be converted into associative arrays.
     * @param int $depth User specified recursion depth.
     * @param int $options Bitmask of JSON decode options.
     *
     * @return mixed
     */
    public static function decode(string $source, bool $associative = false, int $depth = 512, int $options = 0): mixed
    {
        // Try parsing with json_decode first, since that's much faster
        // We only attempt this on PHP 7+ because 5.x doesn't parse some edge cases correctly
        if (PHP_VERSION_ID >= 70000) {
            try {
                $result = json_decode($source, $associative, $depth, $options);
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $result;
                }
            } catch (Throwable $e) {
                // ignore exception, continue parsing as JSON5
            }
        }

        // Fall back to JSON5 if that fails
        $associative = $associative === true || ($associative === null && $options & JSON_OBJECT_AS_ARRAY);
        $castBigIntToString = $options & JSON_BIGINT_AS_STRING;

        $decoder = new self((string)$source, $associative, $depth, $castBigIntToString);

        $result = $decoder->value();
        $decoder->white();
        if ($decoder->currentByte) {
            try {
                $decoder->throwSyntaxError('Syntax error');
            } catch (SyntaxError $e) {
            }
        }

        return $result;
    }

    /**
     * Parse a JSON value.
     *
     * It could be an object, an array, a string, a number,
     * or a word.
     */
    private function value()
    {
        $this->white();
        return match ($this->currentByte) {
            '{' => $this->obj(),
            '[' => $this->arr(),
            '"', "'" => $this->string(),
            '-', '+', '.' => $this->number(),
            default => is_numeric($this->currentByte) ? $this->number() : $this->word(),
        };
    }

    /**
     * Skip whitespace and comments.
     *
     * Note that we're detecting comments by only a single / character.
     * This works since regular expressions are not valid JSON(5), but this will
     * break if there are other valid values that begin with a / character!
     */
    private function white()
    {
        while ($this->currentByte !== null) {
            if ($this->currentByte === '/') {
                $this->comment();
            } elseif (preg_match('/^[ \t\r\n\v\f\xA0]/', $this->currentByte) === 1) {
                $this->next();
            } elseif (ord($this->currentByte) === 0xC2 && ord($this->peek()) === 0xA0) {
                // Non-breaking space in UTF-8
                $this->next();
                $this->next();
            } else {
                return;
            }
        }
    }

    /**
     * Skip a comment, whether inline or block-level, assuming this is one.
     */
    private function comment()
    {
        // Comments always begin with a / character.
        $this->nextOrFail('/');

        if ($this->currentByte === '/') {
            $this->inlineComment();
        } elseif ($this->currentByte === '*') {
            $this->blockComment();
        } else {
            try {
                $this->throwSyntaxError('Unrecognized comment');
            } catch (SyntaxError $e) {
            }
        }
    }

    /**
     * Parse the next character if it matches $c or fail.
     *
     * @param string $c
     *
     * @return void
     */
    private function nextOrFail(string $c): void
    {
        if ($c !== $this->currentByte) {
            try {
                $this->throwSyntaxError(sprintf(
                    'Expected %s instead of %s',
                    self::renderChar($c),
                    self::renderChar($this->currentChar())
                ));
            } catch (SyntaxError $e) {
            }
        }

        $this->next();
    }

    /**
     * @throws SyntaxError
     */
    private function throwSyntaxError($message)
    {
        // Calculate the column number
        $str = substr($this->json, $this->currentLineStartsAt, $this->at - $this->currentLineStartsAt);
        $column = mb_strlen($str) + 1;

        throw new SyntaxError($message, $this->lineNumber, $column);
    }

    private static function renderChar($chr): string
    {
        return $chr === null ? 'EOF' : "'" . $chr . "'";
    }

    /**
     * @return string|null
     */
    private function currentChar(): ?string
    {
        if ($this->at >= $this->length) {
            return null;
        }

        return mb_substr(substr($this->json, $this->at, 4), 0, 1);
    }

    /**
     * Parse the next character.
     *
     * @return null|string
     */
    private function next(): ?string
    {
        // Get the next character. When there are no more characters,
        // return the empty string.
        if ($this->currentByte === "\n" || ($this->currentByte === "\r" && $this->peek() !== "\n")) {
            $this->lineNumber++;
            $this->currentLineStartsAt = $this->at + 1;
        }

        $this->at++;

        return $this->currentByte = $this->getByte($this->at);
    }

    /**
     * Get the next character without consuming it or
     * assigning it to the ch variable.
     *
     * @return string|null
     */
    private function peek(): ?string
    {
        return $this->getByte($this->at + 1);
    }

    /**
     * Skip an inline comment, assuming this is one.
     *
     * The current character should be the second / character in the // pair that begins this inline comment.
     * To finish the inline comment, we look for a newline or the end of the text.
     */
    private function inlineComment()
    {
        do {
            $this->next();
            if ($this->currentByte === "\n" || $this->currentByte === "\r") {
                $this->next();

                return;
            }
        } while ($this->currentByte !== null);
    }

    /**
     * Skip a block comment, assuming this is one.
     *
     * The current character should be the * character in the /* pair that begins this block comment.
     * To finish the block comment, we look for an ending *​/ pair of characters,
     * but we also watch for the end of text before the comment is terminated.
     */
    private function blockComment()
    {
        do {
            $this->next();
            while ($this->currentByte === '*') {
                $this->nextOrFail('*');
                if ($this->currentByte === '/') {
                    $this->nextOrFail('/');

                    return;
                }
            }
        } while ($this->currentByte !== null);

        try {
            $this->throwSyntaxError('Unterminated block comment');
        } catch (SyntaxError $e) {
        }
    }

    /**
     * Parse an object value
     */
    private function obj()
    {
        $object = $this->associative ? [] : new stdClass;

        if (++$this->depth > $this->maxDepth) {
            try {
                $this->throwSyntaxError('Maximum stack depth exceeded');
            } catch (SyntaxError $e) {
            }
        }

        $this->nextOrFail('{');
        $this->white();
        while ($this->currentByte !== null) {
            if ($this->currentByte === '}') {
                $this->nextOrFail('}');
                $this->depth--;
                return $object; // Potentially empty object
            }

            // Keys can be unquoted. If they are, they need to be
            // valid JS identifiers.
            if ($this->currentByte === '"' || $this->currentByte === "'") {
                $key = $this->string();
            } else {
                $key = $this->identifier();
            }

            $this->white();
            $this->nextOrFail(':');
            if ($this->associative) {
                $object[$key] = $this->value();
            } else {
                $object->{$key} = $this->value();
            }
            $this->white();
            // If there's no comma after this pair, this needs to be
            // the end of the object.
            if ($this->currentByte !== ',') {
                $this->nextOrFail('}');
                $this->depth--;
                return $object;
            }
            $this->nextOrFail(',');
            $this->white();
        }

        try {
            $this->throwSyntaxError('Invalid object');
        } catch (SyntaxError $e) {
        }
    }

    private function string()
    {
        $string = '';

        $delim = $this->currentByte;
        $this->next();
        while ($this->currentByte !== null) {
            if ($this->currentByte === $delim) {
                $this->next();

                return $string;
            }

            if ($this->currentByte === '\\') {
                if ($this->peek() === 'u' && $unicodeEscaped = $this->match('/^(?:\\\\u[A-Fa-f0-9]{4})+/')) {
                    try {
                        $unicodeUnescaped = json_decode('"' . $unicodeEscaped . '"', false, 1, JSON_THROW_ON_ERROR);
                        if ($unicodeUnescaped === null && ($err = json_last_error_msg())) {
                            throw new JsonException($err);
                        }
                        $string .= $unicodeUnescaped;
                    } catch (JsonException $e) {
                        try {
                            $this->throwSyntaxError($e->getMessage());
                        } catch (SyntaxError $e) {
                        }
                    }
                    continue;
                }

                $this->next();
                if ($this->currentByte === "\r") {
                    if ($this->peek() === "\n") {
                        $this->next();
                    }
                } elseif (($escapee = self::getEscapee($this->currentByte)) !== null) {
                    $string .= $escapee;
                } else {
                    break;
                }
            } elseif ($this->currentByte === "\n") {
                // unescaped newlines are invalid; see:
                // https://github.com/json5/json5/issues/24
                // @todo this feels special-cased; are there other invalid unescaped chars?
                break;
            } else {
                $string .= $this->currentByte;
            }

            $this->next();
        }

        try {
            $this->throwSyntaxError('Bad string');
        } catch (SyntaxError $e) {
        }
    }

    /**
     * Attempt to match a regular expression at the current position on the current line.
     *
     * This function will not match across multiple lines.
     *
     * @param string $regex
     *
     * @return string|null
     */
    private function match(string $regex): ?string
    {
        $subject = substr($this->json, $this->at);
        // Only match on the current line
        if ($pos = strpos($subject, "\n")) {
            $subject = substr($subject, 0, $pos);
        }

        if (!preg_match($regex, $subject, $matches, PREG_OFFSET_CAPTURE)) {
            return null;
        }

        $this->at += $matches[0][1] + strlen($matches[0][0]);
        $this->currentByte = $this->getByte($this->at);

        return $matches[0][0];
    }

    /**
     * @param string $ch
     *
     * @return string|null
     */
    private static function getEscapee(string $ch): ?string
    {
        return match ($ch) {
            "'" => "'",
            '"' => '"',
            '\\' => '\\',
            '/' => '/',
            "\n" => '',
            'b' => chr(8),
            'f' => "\f",
            'n' => "\n",
            'r' => "\r",
            't' => "\t",
            default => null,
        };
    }

    /**
     * Parse an identifier.
     *
     * Normally, reserved words are disallowed here, but we
     * only use this for unquoted object keys, where reserved words are allowed,
     * so we don't check for those here. References:
     * - http://es5.github.com/#x7.6
     * - https://developer.mozilla.org/en/Core_JavaScript_1.5_Guide/Core_Language_Features#Variables
     * - http://docstore.mik.ua/orelly/webprog/jscript/ch02_07.htm
     */
    private function identifier(): array|string|null
    {
        // @codingStandardsIgnoreStart
        // Be careful when editing this regex, there are a couple Unicode characters in between here -------------vv
        $match = $this->match('/^(?:[\$_\p{L}\p{Nl}]|\\\\u[0-9A-Fa-f]{4})(?:[\$_\p{L}\p{Nl}\p{Mn}\p{Mc}\p{Nd}\p{Pc}‌‍]|\\\\u[0-9A-Fa-f]{4})*/u');
        // @codingStandardsIgnoreEnd

        if ($match === null) {
            try {
                $this->throwSyntaxError('Bad identifier as unquoted key');
            } catch (SyntaxError $e) {
            }
        }

        // Un-escape escaped Unicode chars
        return \preg_replace_callback('/(?:\\\\u[0-9A-Fa-f]{4})+/', function ($m) {
            return json_decode('"' . $m[0] . '"');
        }, $match);
    }

    private function arr()
    {
        $arr = [];

        if (++$this->depth > $this->maxDepth) {
            try {
                $this->throwSyntaxError('Maximum stack depth exceeded');
            } catch (SyntaxError $e) {
            }
        }

        $this->nextOrFail('[');
        $this->white();
        while ($this->currentByte !== null) {
            if ($this->currentByte === ']') {
                $this->nextOrFail(']');
                $this->depth--;
                return $arr; // Potentially empty array
            }
            // ES5 allows omitting elements in arrays, e.g. [,] and
            // [,null]. We don't allow this in JSON5.
            if ($this->currentByte === ',') {
                try {
                    $this->throwSyntaxError('Missing array element');
                } catch (SyntaxError $e) {
                }
            }

            $arr[] = $this->value();

            $this->white();
            // If there's no comma after this value, this needs to
            // be the end of the array.
            if ($this->currentByte !== ',') {
                $this->nextOrFail(']');
                $this->depth--;
                return $arr;
            }
            $this->nextOrFail(',');
            $this->white();
        }

        try {
            $this->throwSyntaxError('Invalid array');
        } catch (SyntaxError $e) {
        }
    }

    private function number()
    {
        $number = null;
        $sign = '';
        $string = '';
        $base = 10;

        if ($this->currentByte === '-' || $this->currentByte === '+') {
            $sign = $this->currentByte;
            $this->next();
        }

        // support for Infinity
        if ($this->currentByte === 'I') {
            $this->word();

            return ($sign === '-') ? -INF : INF;
        }

        // support for NaN
        if ($this->currentByte === 'N') {
            // ignore sign as -NaN also is NaN
            return $this->word();
        }

        if ($this->currentByte === '0') {
            $string .= $this->currentByte;
            $this->next();
            if ($this->currentByte === 'x' || $this->currentByte === 'X') {
                $string .= $this->currentByte;
                $this->next();
                $base = 16;
            } elseif (is_numeric($this->currentByte)) {
                try {
                    $this->throwSyntaxError('Octal literal');
                } catch (SyntaxError $e) {
                }
            }
        }

        switch ($base) {
            case 10:
                // @codingStandardsIgnoreStart
                if ((is_numeric($this->currentByte) || $this->currentByte === '.') && ($match = $this->match('/^\d*\.?\d*/')) !== null) {
                    $string .= $match;
                }
                if (($this->currentByte === 'E' || $this->currentByte === 'e') && ($match = $this->match('/^[Ee][-+]?\d*/')) !== null) {
                    $string .= $match;
                }
                // @codingStandardsIgnoreEnd
                $number = $string;
                break;
            default:
            case 16:
                if (($match = $this->match('/^[A-Fa-f0-9]+/')) !== null) {
                    $string .= $match;
                    $number = hexdec($string);
                    break;
                }
                try {
                    $this->throwSyntaxError('Bad hex number');
                } catch (SyntaxError $e) {
                }
        }

        if ($sign === '-') {
            $number = '-' . $number;
        }

        if (!is_numeric($number) || !is_finite($number)) {
            try {
                $this->throwSyntaxError('Bad number');
            } catch (SyntaxError $e) {
            }
        }

        // Adding 0 will automatically cast this to an int or float
        $asIntOrFloat = $number + 0;

        $isIntLike = preg_match('/^-?\d+$/', $number) === 1;
        if ($this->castBigIntToString && $isIntLike && is_float($asIntOrFloat)) {
            return $number;
        }

        return $asIntOrFloat;
    }

    /**
     * Matches true, false, null, etc
     */
    private function word()
    {
        switch ($this->currentByte) {
            case 't':
                $this->nextOrFail('t');
                $this->nextOrFail('r');
                $this->nextOrFail('u');
                $this->nextOrFail('e');
                return true;
            case 'f':
                $this->nextOrFail('f');
                $this->nextOrFail('a');
                $this->nextOrFail('l');
                $this->nextOrFail('s');
                $this->nextOrFail('e');
                return false;
            case 'n':
                $this->nextOrFail('n');
                $this->nextOrFail('u');
                $this->nextOrFail('l');
                $this->nextOrFail('l');
                return null;
            case 'I':
                $this->nextOrFail('I');
                $this->nextOrFail('n');
                $this->nextOrFail('f');
                $this->nextOrFail('i');
                $this->nextOrFail('n');
                $this->nextOrFail('i');
                $this->nextOrFail('t');
                $this->nextOrFail('y');
                return INF;
            case 'N':
                $this->nextOrFail('N');
                $this->nextOrFail('a');
                $this->nextOrFail('N');
                return NAN;
        }

        try {
            $this->throwSyntaxError('Unexpected ' . self::renderChar($this->currentChar()));
        } catch (SyntaxError $e) {
        }
    }
}
