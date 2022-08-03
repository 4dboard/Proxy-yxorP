<?php declare(strict_types=1);

namespace yxorP\app\lib\data\annotation;

use ReflectionClass;
use function implode;
use function in_array;
use function preg_split;
use function sprintf;
use function substr;
use const PREG_SPLIT_DELIM_CAPTURE;
use const PREG_SPLIT_NO_EMPTY;
use const PREG_SPLIT_OFFSET_CAPTURE;

abstract class abstractLexer
{
    public $lookahead;
    public $token;
    private $input;
    private $tokens = [];
    private $position = 0;
    private $peek = 0;
    private $regex;

    public function setInput($input)
    {
        $this->input = $input;
        $this->tokens = [];
        $this->reset();
        $this->scan($input);
    }

    public function reset()
    {
        $this->lookahead = null;
        $this->token = null;
        $this->peek = 0;
        $this->position = 0;
    }

    protected function scan($input)
    {
        if (!isset($this->regex)) {
            $this->regex = sprintf('/(%s)|%s/%s', implode(')|(', $this->getCatchablePatterns()), implode('|', $this->getNonCatchablePatterns()), $this->getModifiers());
        }
        $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE;
        $matches = preg_split($this->regex, $input, -1, $flags);
        if ($matches === false) {
            $matches = [[$input, 0]];
        }
        foreach ($matches as $match) {
            $type = $this->getType($match[0]);
            $this->tokens[] = ['value' => $match[0], 'type' => $type, 'position' => $match[1],];
        }
    }

    abstract protected function getCatchablePatterns();

    abstract protected function getNonCatchablePatterns();

    protected function getModifiers()
    {
        return 'iu';
    }

    abstract protected function getType(&$value);

    public function resetPeek()
    {
        $this->peek = 0;
    }

    public function resetPosition($position = 0)
    {
        $this->position = $position;
    }

    public function getInputUntilPosition($position)
    {
        return substr($this->input, 0, $position);
    }

    public function isNextToken($type)
    {
        return $this->lookahead !== null && $this->lookahead['type'] === $type;
    }

    public function isNextTokenAny(array $types)
    {
        return $this->lookahead !== null && in_array($this->lookahead['type'], $types, true);
    }

    public function skipUntil($type)
    {
        while ($this->lookahead !== null && $this->lookahead['type'] !== $type) {
            $this->moveNext();
        }
    }

    public function moveNext()
    {
        $this->peek = 0;
        $this->token = $this->lookahead;
        $this->lookahead = isset($this->tokens[$this->position]) ? $this->tokens[$this->position++] : null;
        return $this->lookahead !== null;
    }

    public function isA($value, $token)
    {
        return $this->getType($value) === $token;
    }

    public function glimpse()
    {
        $peek = $this->peek();
        $this->peek = 0;
        return $peek;
    }

    public function peek()
    {
        if (isset($this->tokens[$this->position + $this->peek])) {
            return $this->tokens[$this->position + $this->peek++];
        }
        return null;
    }

    /**
     * @throws \ReflectionException
     */
    public function getLiteral($token)
    {
        $className = static::class;
        $reflClass = new ReflectionClass($className);
        $constants = $reflClass->getConstants();
        foreach ($constants as $name => $value) {
            if ($value === $token) {
                return $className . '::' . $name;
            }
        }
        return $token;
    }
}
