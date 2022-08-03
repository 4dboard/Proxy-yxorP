<?php namespace yxorP\app\lib\data\annotation;


use function array_merge;
use function count;
use function explode;
use function strtolower;
use function token_get_all;
use const PHP_VERSION_ID;
use const T_AS;
use const T_COMMENT;
use const T_DOC_COMMENT;
use const T_NAME_FULLY_QUALIFIED;
use const T_NAME_QUALIFIED;
use const T_NAMESPACE;
use const T_NS_SEPARATOR;
use const T_STRING;
use const T_USE;
use const T_WHITESPACE;

class tokenParser
{
    private array $tokens;
    private int $numTokens;
    private int $pointer = 0;

    public function __construct($contents)
    {
        $this->tokens = token_get_all($contents);
        $this->numTokens = count($this->tokens);
    }

    public function parseUseStatements($namespaceName)
    {
        $statements = [];
        while (($token = $this->next())) {
            if ($token[0] === T_USE) {
                $statements = array_merge($statements, $this->parseUseStatement());
                continue;
            }
            if ($token[0] !== T_NAMESPACE || $this->parseNamespace() !== $namespaceName) {
                continue;
            }
            $statements = [];
        }
        return $statements;
    }

    public function next($docCommentIsComment = true)
    {
        for ($i = $this->pointer; $i < $this->numTokens; $i++) {
            $this->pointer++;
            if ($this->tokens[$i][0] === T_WHITESPACE || $this->tokens[$i][0] === T_COMMENT || ($docCommentIsComment && $this->tokens[$i][0] === T_DOC_COMMENT)) {
                continue;
            }
            return $this->tokens[$i];
        }
        return null;
    }

    public function parseUseStatement()
    {
        $groupRoot = '';
        $class = '';
        $alias = '';
        $statements = [];
        $explicitAlias = false;
        while (($token = $this->next())) {
            if (!$explicitAlias && $token[0] === T_STRING) {
                $class .= $token[1];
                $alias = $token[1];
            } elseif ($explicitAlias && $token[0] === T_STRING) {
                $alias = $token[1];
            } elseif (PHP_VERSION_ID >= 80000 && ($token[0] === T_NAME_QUALIFIED || $token[0] === T_NAME_FULLY_QUALIFIED)) {
                $class .= $token[1];
                $classSplit = explode('\\', $token[1]);
                $alias = $classSplit[count($classSplit) - 1];
            } elseif ($token[0] === T_NS_SEPARATOR) {
                $class .= '\\';
                $alias = '';
            } elseif ($token[0] === T_AS) {
                $explicitAlias = true;
                $alias = '';
            } elseif ($token === ',') {
                $statements[strtolower($alias)] = $groupRoot . $class;
                $class = '';
                $alias = '';
                $explicitAlias = false;
            } elseif ($token === ';') {
                $statements[strtolower($alias)] = $groupRoot . $class;
                break;
            } elseif ($token === '{') {
                $groupRoot = $class;
                $class = '';
            } elseif ($token === '}') {
                continue;
            } else {
                break;
            }
        }
        return $statements;
    }

    public function parseNamespace()
    {
        $name = '';
        while (($token = $this->next()) && ($token[0] === T_STRING || $token[0] === T_NS_SEPARATOR || (PHP_VERSION_ID >= 80000 && ($token[0] === T_NAME_QUALIFIED || $token[0] === T_NAME_FULLY_QUALIFIED)))) {
            $name .= $token[1];
        }
        return $name;
    }

    public function parseClass()
    {
        return $this->parseNamespace();
    }
}
