<?php /* yxorP */

namespace Predis\Command;
class StringSetMultiplePreserve extends StringSetMultiple
{

    public function getId(): string
    {
        return 'MSETNX';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
