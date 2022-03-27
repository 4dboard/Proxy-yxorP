<?php /* yxorP */


namespace Predis\Command;


class KeyRenamePreserve extends KeyRename
{

    public function getId(): string
    {
        return 'RENAMENX';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
