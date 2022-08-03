<?php namespace yxorP\app\lib\data\json;

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
use function preg_replace_callback;
use function sprintf;
use function strlen;
use function strpos;
use function substr;
use const JSON_BIGINT_AS_STRING;
use const JSON_ERROR_NONE;
use const JSON_OBJECT_AS_ARRAY;

final class json5Decoder
{
    private $json;
    private int $length;
    private int $at = 0;
    private mixed $currentByte;
    private int $lineNumber = 1;
    private mixed $associative = false;
    private mixed $maxDepth = 512;
    private mixed $castBigIntToString = false;
    private int $depth = 1;
    private int $currentLineStartsAt = 0;

    private function __construct($json, $associative = false, $depth = 512, $castBigIntToString = false)
    {
        $this->json = $json;
        $this->associative = $associative;
        $this->maxDepth = $depth;
        $this->castBigIntToString = $castBigIntToString;
        $this->length = strlen($json);
        $this->currentByte = $this->getByte(0);
    }

    private function getByte($at)
    {
        if ($at >= $this->length) {
            return null;
        }
        return $this->json[$at];
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    public static function decode($source, $associative = false, $depth = 512, $options = 0)
    {
        if (PHP_VERSION_ID >= 70000) {
            try {
                $result = json_decode($source, $associative, $depth, $options);
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $result;
                }
            } catch (Throwable $e) {
            }
        }
        $associative = $associative === true || ($associative === null && $options & JSON_OBJECT_AS_ARRAY);
        $castBigIntToString = $options & JSON_BIGINT_AS_STRING;
        $decoder = new self((string)$source, $associative, $depth, $castBigIntToString);
        $result = $decoder->value();
        $decoder->white();
        if ($decoder->currentByte) {
            $decoder->throwSyntaxError('Syntax error');
        }
        return $result;
    }

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

    private function white()
    {
        while ($this->currentByte !== null) {
            if ($this->currentByte === '/') {
                $this->comment();
            } elseif (preg_match('/^[ \t\r\n\v\f\xA0]/', $this->currentByte) === 1) {
                $this->next();
            } elseif (ord($this->currentByte) === 0xC2 && ord($this->peek()) === 0xA0) {
                $this->next();
                $this->next();
            } else {
                return;
            }
        }
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function comment()
    {
        $this->nextOrFail('/');
        if ($this->currentByte === '/') {
            $this->inlineComment();
        } elseif ($this->currentByte === '*') {
            $this->blockComment();
        } else {
            $this->throwSyntaxError('Unrecognized comment');
        }
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function nextOrFail($c): void
    {
        if ($c !== $this->currentByte) {
            $this->throwSyntaxError(sprintf('Expected %s instead of %s', self::renderChar($c), self::renderChar($this->currentChar())));
        }
        $this->next();
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function throwSyntaxError($message)
    {
        $str = substr($this->json, $this->currentLineStartsAt, $this->at - $this->currentLineStartsAt);
        $column = mb_strlen($str) + 1;
        throw new syntaxError($message, $this->lineNumber, $column);
    }

    private static function renderChar($chr): string
    {
        return $chr === null ? 'EOF' : "'" . $chr . "'";
    }

    private function currentChar(): ?string
    {
        if ($this->at >= $this->length) {
            return null;
        }
        return mb_substr(substr($this->json, $this->at, 4), 0, 1);
    }

    private function next()
    {
        if ($this->currentByte === "\n" || ($this->currentByte === "\r" && $this->peek() !== "\n")) {
            $this->lineNumber++;
            $this->currentLineStartsAt = $this->at + 1;
        }
        $this->at++;
        return $this->currentByte = $this->getByte($this->at);
    }

    private function peek()
    {
        return $this->getByte($this->at + 1);
    }

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
     * @throws \yxorP\app\lib\data\json\syntaxError
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
        $this->throwSyntaxError('Unterminated block comment');
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function obj()
    {
        $object = $this->associative ? [] : new stdClass;
        if (++$this->depth > $this->maxDepth) {
            $this->throwSyntaxError('Maximum stack depth exceeded');
        }
        $this->nextOrFail('{');
        $this->white();
        while ($this->currentByte !== null) {
            if ($this->currentByte === '}') {
                $this->nextOrFail('}');
                $this->depth--;
                return $object;
            }
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
            if ($this->currentByte !== ',') {
                $this->nextOrFail('}');
                $this->depth--;
                return $object;
            }
            $this->nextOrFail(',');
            $this->white();
        }
        $this->throwSyntaxError('Invalid object');
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
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
                            throw new \JsonException($err);
                        }
                        $string .= $unicodeUnescaped;
                    } catch (\JsonException $e) {
                        $this->throwSyntaxError($e->getMessage());
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
                break;
            } else {
                $string .= $this->currentByte;
            }
            $this->next();
        }
        $this->throwSyntaxError('Bad string');
    }

    private function match($regex)
    {
        $subject = substr($this->json, $this->at);
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

    private static function getEscapee($ch): ?string
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
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function identifier(): array|string|null
    {
        $match = $this->match('/^(?:[\$_\p{L}\p{Nl}]|\\\\u[0-9A-Fa-f]{4})(?:[\$_\p{L}\p{Nl}\p{Mn}\p{Mc}\p{Nd}\p{Pc}‌‍]|\\\\u[0-9A-Fa-f]{4})*/u');
        if ($match === null) {
            $this->throwSyntaxError('Bad identifier as unquoted key');
        }
        return preg_replace_callback('/(?:\\\\u[0-9A-Fa-f]{4})+/', function ($m) {
            return json_decode('"' . $m[0] . '"');
        }, $match);
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
    private function arr()
    {
        $arr = [];
        if (++$this->depth > $this->maxDepth) {
            $this->throwSyntaxError('Maximum stack depth exceeded');
        }
        $this->nextOrFail('[');
        $this->white();
        while ($this->currentByte !== null) {
            if ($this->currentByte === ']') {
                $this->nextOrFail(']');
                $this->depth--;
                return $arr;
            }
            if ($this->currentByte === ',') {
                $this->throwSyntaxError('Missing array element');
            }
            $arr[] = $this->value();
            $this->white();
            if ($this->currentByte !== ',') {
                $this->nextOrFail(']');
                $this->depth--;
                return $arr;
            }
            $this->nextOrFail(',');
            $this->white();
        }
        $this->throwSyntaxError('Invalid array');
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
     */
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
        if ($this->currentByte === 'I') {
            $this->word();
            return ($sign === '-') ? -INF : INF;
        }
        if ($this->currentByte === 'N') {
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
                $this->throwSyntaxError('Octal literal');
            }
        }
        switch ($base) {
            case 10:
                if ((is_numeric($this->currentByte) || $this->currentByte === '.') && ($match = $this->match('/^\d*\.?\d*/')) !== null) {
                    $string .= $match;
                }
                if (($this->currentByte === 'E' || $this->currentByte === 'e') && ($match = $this->match('/^[Ee][-+]?\d*/')) !== null) {
                    $string .= $match;
                }
                $number = $string;
                break;
            default:
            case 16:
                if (($match = $this->match('/^[A-Fa-f0-9]+/')) !== null) {
                    $string .= $match;
                    $number = hexdec($string);
                    break;
                }
                $this->throwSyntaxError('Bad hex number');
        }
        if ($sign === '-') {
            $number = '-' . $number;
        }
        if (!is_numeric($number) || !is_finite($number)) {
            $this->throwSyntaxError('Bad number');
        }
        $asIntOrFloat = $number + 0;
        $isIntLike = preg_match('/^-?\d+$/', $number) === 1;
        if ($this->castBigIntToString && $isIntLike && is_float($asIntOrFloat)) {
            return $number;
        }
        return $asIntOrFloat;
    }

    /**
     * @throws \yxorP\app\lib\data\json\syntaxError
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
        $this->throwSyntaxError('Unexpected ' . self::renderChar($this->currentChar()));
    }
}
