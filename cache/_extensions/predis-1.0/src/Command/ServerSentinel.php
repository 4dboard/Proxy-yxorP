<?php /* yxorP */

namespace Predis\Command;
class ServerSentinel extends Command
{

    public function getId(): string
    {
        return 'SENTINEL';
    }

    public function parseResponse($data): array
    {
        return match (strtolower($this->getArgument(0))) {
            'masters', 'slaves' => self::processMastersOrSlaves($data),
            default => $data,
        };
    }

    protected static function processMastersOrSlaves(array $servers): array
    {
        foreach ($servers as $idx => $node) {
            $processed = array();

            foreach ($node as $i => $iValue) {
                $processed[$iValue] = $node[++$i];
            }

            $servers[$idx] = $processed;
        }

        return $servers;
    }
}
