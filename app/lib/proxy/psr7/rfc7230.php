<?php namespace yxorP\app\lib\proxy\psr7;
final class rfc7230
{
    const HEADER_REGEX = "(^([^()<>@,;:\\\"/[\]?={}\x01-\x20\x7F]++):[ \t]*+((?:[ \t]*+[\x21-\x7E\x80-\xFF]++)*+)[ \t]*+\r?\n)m";
    const HEADER_FOLD_REGEX = "(\r?\n[ \t]++)";
}
