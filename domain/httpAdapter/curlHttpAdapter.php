<?php declare(strict_types=1);

namespace yxorp\domain\HttpAdapter;

use Exception;
use yxorp\domain\Exception\curlAdapterException;
use function assert;
use function curl_close;
use function curl_errno;
use function curl_error;
use function curl_exec;
use function curl_getinfo;
use function curl_init;
use function curl_setopt;
use function is_string;
use const CURLINFO_HTTP_CODE;
use const CURLOPT_CONNECTTIMEOUT;
use const CURLOPT_FAILONERROR;
use const CURLOPT_FOLLOWLOCATION;
use const CURLOPT_RETURNTRANSFER;
use const CURLOPT_SSL_VERIFYHOST;
use const CURLOPT_SSL_VERIFYPEER;
use const CURLOPT_TIMEOUT;
use const CURLOPT_URL;
use const CURLOPT_USERAGENT;

class curlHttpAdapter implements httpAdapterInterface
{
    public function getContent($url, $timeout = 5)
    {
        $ch = curl_init();
        if ($ch === false) {
            throw new Exception('PHP-Domain-Parser: failed to initialize : cURL');
        }
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-Domain-Parser cURL Request');
        $content = curl_exec($ch);
        $errNo = curl_errno($ch);
        if ($errNo) {
            throw new curlAdapterException("CURL error [{$errNo}]: " . curl_error($ch), $errNo);
        }
        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($responseCode !== 200) {
            throw new curlAdapterException('Wrong HTTP response code: ' . $responseCode, $responseCode);
        }
        curl_close($ch);
        assert($content === false || is_string($content));
        return $content;
    }
}