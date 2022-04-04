<?php /* yxorP */

namespace Predis\Command;
class PubSubPubsub extends Command
{

    public function getId(): string
    {
        return 'PUBSUB';
    }

    public function parseResponse($data): array
    {
        return match (strtolower($this->getArgument(0))) {
            'numsub' => self::processNumsub($data),
            default => $data,
        };
    }

    protected static function processNumsub(array $channels): array
    {
        $processed = array();

        foreach ($channels as $i => $iValue) {
            $processed[$iValue] = $channels[++$i];
        }

        return $processed;
    }
}
