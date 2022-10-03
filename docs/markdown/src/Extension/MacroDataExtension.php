<?php

namespace PhpDocumentorMarkdown\Extension;

use PhpDocumentorMarkdown\Test\Twig\Macro\MacroData;
use Twig\Error\RuntimeError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MacroDataExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('clone_with_output', array($this, 'cloneWithOutput')),
        ];
    }

    /**
     * Add an object property.
     *
     * @param  MacroData  $data
     * @param  mixed  $value
     *
     * @return MacroData $data, but with output added.
     * @throws RuntimeError
     */
    public function cloneWithOutput(MacroData $data, $value)
    {
        if ( ! is_a($data, MacroData::class)) {
            throw new RuntimeError('The clone_with_output function only accepts a MacroData instance.');
        }

        $result = clone $data;
        $result->setOutput($value);

        return $result;
    }
}
