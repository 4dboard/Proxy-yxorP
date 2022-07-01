<?php

namespace yxorP\minify;

use JetBrains\PhpStorm\Pure;

class minify implements minfyInterface
{
    private array $processors;

    public function __construct(minfyInterface ...$processors)
    {
        $this->processors = $processors;
    }

    #[Pure] public static function createDefault(): self
    {
        return new self(
            new whitespacesRemover,
            new inlineCssMinifier,
            new inlineJavascriptMinifier,
            new htmlCommentsRemover
        );
    }

    public function process(string $buffer): string
    {
        foreach ($this->processors as $processor) {
            $buffer = $processor->process($buffer);
        }

        return $buffer;
    }

    public function addProcessor(minfyInterface $processor): self
    {
        $this->processors[] = $processor;

        return $this;
    }
}
