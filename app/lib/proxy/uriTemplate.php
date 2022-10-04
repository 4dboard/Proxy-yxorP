<?php namespace yxorP\app\lib\proxy;
class uriTemplate
{
    private static $operatorHash = ['' => ['prefix' => '', 'joiner' => ',', 'query' => false], '+' => ['prefix' => '', 'joiner' => ',', 'query' => false], '#' => ['prefix' => '#', 'joiner' => ',', 'query' => false], '.' => ['prefix' => '.', 'joiner' => '.', 'query' => false], '/' => ['prefix' => '/', 'joiner' => '/', 'query' => false], ';' => ['prefix' => ';', 'joiner' => ';', 'query' => true], '?' => ['prefix' => '?', 'joiner' => '&', 'query' => true], '&' => ['prefix' => '&', 'joiner' => '&', 'query' => true]];
    private static $delims = [':', '/', '?', '#', '[', ']', '@', '!', '$', '&', '\'', '(', ')', '*', '+', ',', ';', '='];
    private static $delimsPct = ['%3A', '%2F', '%3F', '%23', '%5B', '%5D', '%40', '%21', '%24', '%26', '%27', '%28', '%29', '%2A', '%2B', '%2C', '%3B', '%3D'];
    private $template;
    private $variables;

    public function expand($template, array $variables)
    {
        if (false === strpos($template, '{')) {
            return $template;
        }
        $this->template = $template;
        $this->variables = $variables;
        return preg_replace_callback('/{([^}]+)}/', [$this, 'expandMatch'], $this->template);
    }

    private function expandMatch(array $matches)
    {
        static $rfc1738to3986 = ['+' => '%20', '%7e' => '~'];
        $replacements = [];
        $parsed = self::parseExpression($matches[1]);
        $prefix = self::$operatorHash[$parsed['operator']]['prefix'];
        $joiner = self::$operatorHash[$parsed['operator']]['joiner'];
        $useQuery = self::$operatorHash[$parsed['operator']]['query'];
        foreach ($parsed['values'] as $value) {
            if (!isset($this->variables[$value['value']])) {
                continue;
            }
            $variable = $this->variables[$value['value']];
            $actuallyUseQuery = $useQuery;
            $expanded = '';
            if (is_array($variable)) {
                $isAssoc = $this->isAssoc($variable);
                $kvp = [];
                foreach ($variable as $key => $var) {
                    if ($isAssoc) {
                        $key = rawurlencode($key);
                        $isNestedArray = is_array($var);
                    } else {
                        $isNestedArray = false;
                    }
                    if (!$isNestedArray) {
                        $var = rawurlencode($var);
                        if ($parsed['operator'] === '+' || $parsed['operator'] === '#') {
                            $var = $this->decodeReserved($var);
                        }
                    }
                    if ($value['modifier'] === '*') {
                        if ($isAssoc) {
                            if ($isNestedArray) {
                                $var = strtr(http_build_query([$key => $var]), $rfc1738to3986);
                            } else {
                                $var = $key . '=' . $var;
                            }
                        } elseif ($key > 0 && $actuallyUseQuery) {
                            $var = $value['value'] . '=' . $var;
                        }
                    }
                    $kvp[$key] = $var;
                }
                if (empty($variable)) {
                    $actuallyUseQuery = false;
                } elseif ($value['modifier'] === '*') {
                    $expanded = implode($joiner, $kvp);
                    if ($isAssoc) {
                        $actuallyUseQuery = false;
                    }
                } else {
                    if ($isAssoc) {
                        foreach ($kvp as $k => &$v) {
                            $v = $k . ',' . $v;
                        }
                    }
                    $expanded = implode(',', $kvp);
                }
            } else {
                if ($value['modifier'] === ':') {
                    $variable = substr($variable, 0, $value['position']);
                }
                $expanded = rawurlencode($variable);
                if ($parsed['operator'] === '+' || $parsed['operator'] === '#') {
                    $expanded = $this->decodeReserved($expanded);
                }
            }
            if ($actuallyUseQuery) {
                if (!$expanded && $joiner !== '&') {
                    $expanded = $value['value'];
                } else {
                    $expanded = $value['value'] . '=' . $expanded;
                }
            }
            $replacements[] = $expanded;
        }
        $ret = implode($joiner, $replacements);
        if ($ret && $prefix) {
            return $prefix . $ret;
        }
        return $ret;
    }

    private function parseExpression($expression)
    {
        $result = [];
        if (isset(self::$operatorHash[$expression[0]])) {
            $result['operator'] = $expression[0];
            $expression = substr($expression, 1);
        } else {
            $result['operator'] = '';
        }
        foreach (explode(',', $expression) as $value) {
            $value = trim($value);
            $varspec = [];
            if ($colonPos = strpos($value, ':')) {
                $varspec['value'] = substr($value, 0, $colonPos);
                $varspec['modifier'] = ':';
                $varspec['position'] = (int)substr($value, $colonPos + 1);
            } elseif (substr($value, -1) === '*') {
                $varspec['modifier'] = '*';
                $varspec['value'] = substr($value, 0, -1);
            } else {
                $varspec['value'] = (string)$value;
                $varspec['modifier'] = '';
            }
            $result['values'][] = $varspec;
        }
        return $result;
    }

    private function isAssoc(array $array)
    {
        return $array && array_keys($array)[0] !== 0;
    }

    private function decodeReserved($string)
    {
        return str_replace(self::$delimsPct, self::$delims, $string);
    }
}
