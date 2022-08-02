<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
class whitespacePathNormalizer implements pathNormalizerInterface
{
    public function normalizePath(string $path): string
    {
        $path = str_replace('\\', '/', $path);
        $this->rejectFunkyWhiteSpace($path);
        return $this->normalizeRelativePath($path);
    }

    private function rejectFunkyWhiteSpace(string $path): void
    {
        if (preg_match('#\p{C}+#u', $path)) {
            throw corruptedPathDetected::forPath($path);
        }
    }

    private function normalizeRelativePath(string $path): string
    {
        $parts = [];
        foreach (explode('/', $path) as $part) {
            switch ($part) {
                case '':
                case '.':
                    break;
                case '..':
                    if (empty($parts)) {
                        throw pathTraversalDetected::forPath($path);
                    }
                    array_pop($parts);
                    break;
                default:
                    $parts[] = $part;
                    break;
            }
        }
        return implode('/', $parts);
    }
}
