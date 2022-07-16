<?php

namespace PhpDocumentorMarkdown\Extension;

use Twig\Error\RuntimeError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class JsonExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('object_to_json', array($this, 'objectToJson')),
        ];
    }

    /**
     * Transforms an object into a JSON string.
     *
     * @param $object
     *
     * @return string JSON string.
     * @throws RuntimeError
     */
    public function objectToJson($object): string
    {
        if ( ! is_object($object) && ! is_array($object)) {
            throw new RuntimeError('The object_to_json filter only accepts objects and arrays.');
        }

        return json_encode($object);
    }
}
