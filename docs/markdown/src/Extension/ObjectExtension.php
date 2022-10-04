<?php

namespace PhpDocumentorMarkdown\Extension;

use Twig\Error\RuntimeError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ObjectExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('add_property', array($this, 'addProperty')),
        ];
    }

    /**
     * Add an object property.
     *
     * @param  mixed  $object
     * @param  string  $key
     * @param  mixed  $value
     *
     * @return mixed
     * @throws RuntimeError
     */
    public function addProperty($object, string $key, $value)
    {
        if ( ! is_object($object)) {
            throw new RuntimeError('The add_property function only accepts objects.');
        }

        $object->{$key} = $value;

        return $object;
    }
}
