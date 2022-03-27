<?php /* yxorP */


namespace Predis\Command;


class HashSetPreserve extends Command
{

    public function getId(): string
    {
        return 'HSETNX';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
