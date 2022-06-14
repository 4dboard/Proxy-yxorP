<?php namespace yxorP\Http;
class HtmlString
{
    const ENCODING = 'UTF-8';
    const DidNotMatch = 'DidNotMatch';
    const DidMatch = 'DidMatch';
    const NotEnoughCharacters = 'NotEnoughCharacters';
    const begin = 0;
    const current = 1;
    const end = 2;
    protected $str;
    protected $i = 0;
    protected $len = 0;

    public function __construct($str)
    {
        $this->str = $str;
        $this->len = strlen($str);
    }

    public function getCurrentChar()
    {
        $i = $this->i;
        if ($this->len <= $i) {
            return false;
        }
        return $this->str[$i];
    }

    public function advance()
    {
        $this->i += 1;
    }

    public function substr($startPos, $length)
    {
        return substr($this->str, $startPos, $length);
    }

    public function tell()
    {
        return $this->i;
    }

    public function get()
    {
        return $this->str;
    }

    public function len()
    {
        return $this->len;
    }

    public function lookAheadIgnoringCase($str)
    {
        return $this->_lookAhead($str, false);
    }

    protected function _lookAhead($str, $caseSensitive = true)
    {
        $i = $this->i;
        $result = $this->token($str, $caseSensitive) !== false;
        $this->seek($i);
        if (strlen($str) + $i <= $this->len) {
            if ($result) {
                return static::DidMatch;
            }
            return static::DidNotMatch;
        }
        return static::NotEnoughCharacters;
    }

    public function token($str, $caseSensitive = true)
    {
        $matched = $this->read(strlen($str));
        if ($caseSensitive) {
            return $str === $matched ? $str : false;
        } else {
            return strtolower($str) === strtolower($matched) ? $matched : false;
        }
    }

    public function read($i)
    {
        if ($this->eos() && $i > 0) {
            return false;
        }
        $this->i += $i;
        return substr($this->str, $this->i - $i, $i);
    }

    public function eos()
    {
        return $this->len <= $this->i;
    }

    public function seek($offset, $whence = self::begin)
    {
        switch ($whence) {
            case static::begin:
                if ($this->len < $offset) {
                    return false;
                }
                $this->i = $offset;
                return true;
                break;
            case static::current:
                $lookAhead = $this->i + $offset;
                if ($lookAhead < 0 || $lookAhead > $this->len) {
                    return false;
                }
                $this->i = $lookAhead;
                return true;
                break;
        }
        throw new \InvalidArgumentException;
    }

    public function lookAhead($str)
    {
        return $this->_lookAhead($str, true);
    }

    public function numberOfCharactersConsumed()
    {
        return $this->i;
    }
}