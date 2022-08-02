<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use yxorP\app\lib\openapi\logger\defaultLogger;

class Context
{
    private $_parent;

    public function __construct(array $properties = [], ?Context $parent = null)
    {
        foreach ($properties as $property => $value) {
            $this->$property = $value;
        }
        $this->_parent = $parent;
        if (!$this->logger) {
            $this->logger = new DefaultLogger();
        }
    }

    public static function detect(int $index = 0): Context
    {
        $context = new Context();
        $backtrace = debug_backtrace();
        $position = $backtrace[$index];
        if (isset($position['file'])) {
            $context->filename = $position['file'];
        }
        if (isset($position['line'])) {
            $context->line = $position['line'];
        }
        $caller = isset($backtrace[$index + 1]) ? $backtrace[$index + 1] : null;
        if (isset($caller['function'])) {
            $context->method = $caller['function'];
            if (isset($caller['type']) && $caller['type'] === '::') {
                $context->static = true;
            }
        }
        if (isset($caller['class'])) {
            $fqn = explode('\\', $caller['class']);
            $context->class = array_pop($fqn);
            if (count($fqn)) {
                $context->namespace = implode('\\', $fqn);
            }
        }
        return $context;
    }

    public function is(string $type): bool
    {
        return property_exists($this, $type);
    }

    public function not(string $type): bool
    {
        return property_exists($this, $type) === false;
    }

    public function with(string $property): ?Context
    {
        if (property_exists($this, $property)) {
            return $this;
        }
        if ($this->_parent !== null) {
            return $this->_parent->with($property);
        }
        return null;
    }

    public function getRootContext(): Context
    {
        if ($this->_parent !== null) {
            return $this->_parent->getRootContext();
        }
        return $this;
    }

    public function __get($property)
    {
        if ($this->_parent !== null) {
            return $this->_parent->$property;
        }
        return null;
    }

    public function __toString()
    {
        return $this->getDebugLocation();
    }

    public function getDebugLocation(): string
    {
        $location = '';
        if ($this->class && ($this->method || $this->property)) {
            $location .= $this->fullyQualifiedName($this->class);
            if ($this->method) {
                $location .= ($this->static ? '::' : '->') . $this->method . '()';
            } elseif ($this->property) {
                $location .= ($this->static ? '::$' : '->') . $this->property;
            }
        }
        if ($this->filename) {
            if ($location !== '') {
                $location .= ' in ';
            }
            $location .= $this->filename;
        }
        if ($this->line) {
            if ($location !== '') {
                $location .= ' on';
            }
            $location .= ' line ' . $this->line;
            if ($this->character) {
                $location .= ':' . $this->character;
            }
        }
        return $location;
    }

    public function fullyQualifiedName(?string $source): string
    {
        if ($source === null) {
            return '';
        }
        if ($this->namespace) {
            $namespace = str_replace('\\\\', '\\', '\\' . $this->namespace . '\\');
        } else {
            $namespace = '\\';
        }
        $thisSource = $this->class ?? $this->interface ?? $this->trait;
        if ($thisSource && strcasecmp($source, $thisSource) === 0) {
            return $namespace . $thisSource;
        }
        $pos = strpos($source, '\\');
        if ($pos !== false) {
            if ($pos === 0) {
                return $source;
            }
            if ($this->uses) {
                foreach ($this->uses as $alias => $aliasedNamespace) {
                    $alias .= '\\';
                    if (strcasecmp(substr($source, 0, strlen($alias)), $alias) === 0) {
                        return '\\' . $aliasedNamespace . substr($source, strlen($alias) - 1);
                    }
                }
            }
        } elseif ($this->uses) {
            foreach ($this->uses as $alias => $aliasedNamespace) {
                if (strcasecmp($alias, $source) === 0) {
                    return '\\' . $aliasedNamespace;
                }
            }
        }
        return $namespace . $source;
    }

    public function __debugInfo()
    {
        return ['-' => $this->getDebugLocation()];
    }

    public function phpdocDescription()
    {
        $summary = $this->phpdocSummary();
        if (!$summary) {
            return Generator::UNDEFINED;
        }
        if (false !== ($substr = substr($this->phpdocContent(), strlen($summary)))) {
            $description = trim($substr);
        } else {
            $description = '';
        }
        if ($description === '') {
            return Generator::UNDEFINED;
        }
        return $description;
    }

    public function phpdocSummary()
    {
        $content = $this->phpdocContent();
        if (!$content) {
            return Generator::UNDEFINED;
        }
        $lines = preg_split('/(\n|\r\n)/', $content);
        $summary = '';
        foreach ($lines as $line) {
            $summary .= $line . "\n";
            if ($line === '' || substr($line, -1) === '.') {
                return trim($summary);
            }
        }
        $summary = trim($summary);
        if ($summary === '') {
            return Generator::UNDEFINED;
        }
        return $summary;
    }

    public function phpdocContent()
    {
        $comment = preg_split('/(\n|\r\n)/', (string)$this->comment);
        $comment[0] = preg_replace('/[ \t]*\\/\*\*/', '', $comment[0]);
        $i = count($comment) - 1;
        $comment[$i] = preg_replace('/\*\/[ \t]*$/', '', $comment[$i]);
        $lines = [];
        $append = false;
        foreach ($comment as $line) {
            $line = ltrim($line, "\t *");
            if (substr($line, 0, 1) === '@') {
                break;
            }
            if ($append) {
                $i = count($lines) - 1;
                $lines[$i] = substr($lines[$i], 0, -1) . $line;
            } else {
                $lines[] = $line;
            }
            $append = (substr($line, -1) === '\\');
        }
        $description = trim(implode("\n", $lines));
        if ($description === '') {
            return Generator::UNDEFINED;
        }
        return $description;
    }
}
