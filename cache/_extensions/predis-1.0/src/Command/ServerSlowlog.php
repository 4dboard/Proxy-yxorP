<?php /* yxorP */


namespace Predis\Command;


class ServerSlowlog extends Command
{

    public function getId(): string
    {
        return 'SLOWLOG';
    }


    public function parseResponse($data): array
    {
        if (is_array($data)) {
            $log = array();

            foreach ($data as $index => $entry) {
                $log[$index] = array(
                    'id' => $entry[0],
                    'timestamp' => $entry[1],
                    'duration' => $entry[2],
                    'command' => $entry[3],
                );
            }

            return $log;
        }

        return $data;
    }
}
