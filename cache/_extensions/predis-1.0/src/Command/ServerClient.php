<?php /* yxorP */

namespace Predis\Command;
class ServerClient extends Command
{

    public function getId(): string
    {
        return 'CLIENT';
    }

    public function parseResponse($data): array
    {
        $args = array_change_key_case($this->getArguments(), CASE_UPPER);

        return match (strtoupper($args[0])) {
            'LIST' => $this->parseClientList($data),
            default => $data,
        };
    }

    protected function parseClientList($data): array
    {
        $clients = array();

        foreach (explode("\n", $data, -1) as $clientData) {
            $client = array();

            foreach (explode(' ', $clientData) as $kv) {
                @list($k, $v) = explode('=', $kv);
                $client[$k] = $v;
            }

            $clients[] = $client;
        }

        return $clients;
    }
}
