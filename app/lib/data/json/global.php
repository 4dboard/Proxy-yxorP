<?php namespace yxorP\app\lib\json;

use function class_exists;
use function define;
use function defined;

if (!function_exists('json5_decode')) {
    function json5_decode($source, $associative = false, $depth = 512, $options = 0)
    {
        return yxorP\app\lib\json::decode($source, $associative, $depth, $options);
    }
}
if (!defined('JSON_THROW_ON_ERROR')) {
    define('JSON_THROW_ON_ERROR', 1 << 22);
}
if (!class_exists('JsonException')) {
    class JsonException extends Exception
    {
    }
}
