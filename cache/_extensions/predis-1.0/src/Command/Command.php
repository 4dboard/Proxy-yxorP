<?php /* yxorP */

namespace Predis\Command;
abstract class Command implements CommandInterface
{
    private $slot;
    private array $arguments = array();

    public static function normalizeArguments(array $arguments): array
    {
        if (count($arguments) === 1 && is_array($arguments[0])) {
            return $arguments[0];
        }

        return $arguments;
    }

    public static function normalizeVariadic(array $arguments): array
    {
        if (count($arguments) === 2 && is_array($arguments[1])) {
            return array_merge(array($arguments[0]), $arguments[1]);
        }

        return $arguments;
    }

    public function setRawArguments(array $arguments)
    {
        $this->arguments = $arguments;
        unset($this->slot);
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function setArguments(array $arguments)
    {
        $this->arguments = $this->filterArguments($arguments);
        unset($this->slot);
    }

    protected function filterArguments(array $arguments): array
    {
        return $arguments;
    }

    public function getArgument($index)
    {
        return $this->arguments[$index] ?? null;
    }

    public function getSlot()
    {
        return null;
    }

    public function setSlot($slot)
    {
        $this->slot = $slot;
    }

    public function parseResponse($data)
    {
        return $data;
    }
}
