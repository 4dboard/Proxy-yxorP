<?php namespace yxorP\Http;
require $GLOBALS['PLUGIN_DIR'] . '/http/Contract/ProcessorInterface.php';

use yxorP\Http\Contract\ProcessorInterface;
use yxorP\Http\Processor\HtmlCommentsRemover;
use yxorP\Http\Processor\InlineCssMinifier;
use yxorP\Http\Processor\InlineJavascriptMinifier;
use yxorP\Http\Processor\WhitespacesRemover;


class Minifier implements ProcessorInterface
{
    private $processors;

    public function __construct(ProcessorInterface ...$processors)
    {
        $this->processors = $processors;
    }

    public static function createDefault(): self
    {
        return new self(new WhitespacesRemover, new InlineCssMinifier, new InlineJavascriptMinifier, new HtmlCommentsRemover);
    }

    public function process(string $buffer): string
    {
        foreach ($this->processors as $processor) {
            $buffer = $processor->process($buffer);
        }
        return $buffer;
    }

    public function addProcessor(ProcessorInterface $processor): self
    {
        $this->processors[] = $processor;
        return $this;
    }
}