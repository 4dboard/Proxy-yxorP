<?php /* yxorP */

namespace Predis\Command;
class HashGetAll extends Command
{

    public function getId(): string
    {
        return 'HGETALL';
    }

    public function parseResponse($data): array
    {
        $result = array();

        foreach ($data as $i => $iValue) {
            $result[$iValue] = $data[++$i];
        }

        return $result;
    }
}
