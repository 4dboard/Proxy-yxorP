<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use Exception;
use yxorP\app\lib\annotation\attributeRegistry;
use yxorP\app\lib\annotation\docParser;

if (class_exists(AnnotationRegistry::class, true)) {
    AnnotationRegistry::registerLoader(function (string $class): bool {
        if (Analyser::$whitelist === false) {
            $whitelist = ['OpenApi\\Annotations\\'];
        } else {
            $whitelist = Analyser::$whitelist;
        }
        foreach ($whitelist as $namespace) {
            if (strtolower(substr($class, 0, strlen($namespace))) === strtolower($namespace)) {
                $loaded = class_exists($class);
                if (!$loaded && $namespace === 'OpenApi\\Annotations\\') {
                    if (in_array(strtolower(substr($class, 20)), ['definition', 'path'])) {
                        throw new Exception('The annotation @SWG\\' . substr($class, 20) . '() is deprecated. Found in ' . Analyser::$context . "\nFor more information read the migration guide: https://github.com/zircote/swagger-php/blob/master/docs/Migrating-to-v3.md");
                    }
                }
                return $loaded;
            }
        }
        return false;
    });
}

class Analyser
{
    public static $whitelist = ['OpenApi\\Annotations\\'];
    public static $defaultImports = ['oa' => 'OpenApi\\Annotations'];
    public static $context;
    public $docParser;

    public function __construct(?docParser $docParser = null)
    {
        if ($docParser === null) {
            $docParser = new docParser();
            $docParser->setIgnoreNotImportedAnnotations(true);
            $docParser->setImports(static::$defaultImports);
        }
        $this->docParser = $docParser;
    }

    public function fromComment(string $comment, Context $context): array
    {
        $context->comment = $comment;
        try {
            self::$context = $context;
            if ($context->is('annotations') === false) {
                $context->annotations = [];
            }
            $annotations = $this->docParser->parse($comment);
            self::$context = null;
            return $annotations;
        } catch (Exception $e) {
            self::$context = null;
            if (preg_match('/^(.+) at position ([0-9]+) in ' . preg_quote((string)$context, '/') . '\.$/', $e->getMessage(), $matches)) {
                $errorMessage = $matches[1];
                $errorPos = (int)$matches[2];
                $atPos = strpos($comment, '@');
                $context->line += substr_count($comment, "\n", 0, $atPos + $errorPos);
                $lines = explode("\n", substr($comment, $atPos, $errorPos));
                $context->character = strlen(array_pop($lines)) + 1;
                $context->logger->error($errorMessage . ' in ' . $context, ['exception' => $e]);
            } else {
                $context->logger->error($e);
            }
            return [];
        }
    }
}
