<?php /* yxorP */

namespace Predis\Response;
class Status implements ResponseInterface
{

    private $payload;

    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    public static function get($payload): ?Status
    {
        return match ($payload) {
            'OK', 'QUEUED' => self::$$payload ?? (self::$$payload = new self($payload)),
            default => new self($payload),
        };
    }

    public function __toString()
    {
        return $this->payload;
    }

    public function getPayload()
    {
        return $this->payload;
    }
}
