<?php

namespace yxorP\Minify;

class Minify implements MinfyInterface
{
    private $processors;

    public function __construct(MinfyInterface ...$processors)
    {
        $this->processors = $processors;
    }

    public static function createDefault(): self
    {
        return new self(
            new WhitespacesRemover,
            new InlineCssMinifier,
            new InlineJavascriptMinifier,
            new HtmlCommentsRemover
        );
    }

    public function process(string $buffer): string
    {
        foreach ($this->processors as $processor) {
            $buffer = $processor->process($buffer);
        }

        return $buffer;
    }

    public function addProcessor(MinfyInterface $processor): self
    {
        $this->processors[] = $processor;

        return $this;
    }
}
