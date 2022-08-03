<?php namespace yxorP\app\lib\data\annotation;


use ReflectionClass;
use SplFileObject;
use function is_file;
use function method_exists;
use function preg_quote;
use function preg_replace;

final class phpParser
{
    public function parseClass(ReflectionClass $class): array
    {
        return $this->parseUseStatements($class);
    }

    public function parseUseStatements($reflection): array
    {
        if (method_exists($reflection, 'getUseStatements')) {
            return $reflection->getUseStatements();
        }
        $filename = $reflection->getFileName();
        if ($filename === false) {
            return [];
        }
        $content = $this->getFileContent($filename, $reflection->getStartLine());
        if ($content === null) {
            return [];
        }
        $namespace = preg_quote($reflection->getNamespaceName());
        $content = preg_replace('/^.*?(\bnamespace\s+' . $namespace . '\s*[;{].*)$/s', '\\1', $content);
        $tokenizer = new tokenParser('<?php ' . $content);
        return $tokenizer->parseUseStatements($reflection->getNamespaceName());
    }

    private function getFileContent($filename, $lineNumber): ?string
    {
        if (!is_file($filename)) {
            return null;
        }
        $content = '';
        $lineCnt = 0;
        $file = new SplFileObject($filename);
        while (!$file->eof()) {
            if ($lineCnt++ === $lineNumber) {
                break;
            }
            $content .= $file->fgets();
        }
        return $content;
    }
}
