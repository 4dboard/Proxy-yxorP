<?php /* yxorP */


namespace Predis\Command;


class ServerConfig extends Command
{

    public function getId(): string
    {
        return 'CONFIG';
    }


    public function parseResponse($data): array
    {
        if (is_array($data)) {
            $result = array();

            foreach ($data as $i => $iValue) {
                $result[$iValue] = $data[++$i];
            }

            return $result;
        }

        return $data;
    }
}
