<?php declare(strict_types=1);

namespace Pdp\HttpAdapter;

use function file_get_contents;
use function stream_context_create;

class PhpHttpAdapter implements HttpAdapterInterface
{
    public function getContent($url, $timeout = 5)
    {
        $ctx = stream_context_create(['http' => ['timeout' => $timeout,],]);
        return file_get_contents($url, false, $ctx);
    }
}