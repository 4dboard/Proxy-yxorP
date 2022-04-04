<?php /* yxorP */

namespace Predis\Command;

use InvalidArgumentException;

class RawCommand implements CommandInterface
{
    private $slot;
    private string $commandID;
    private array $arguments;

    public function __construct(array $arguments)
    {
        if (!$arguments) {
            throw new InvalidArgumentException(
                'The arguments array must contain at least the command ID.'
            );
        }

        $this->commandID = strtoupper(array_shift($arguments));
        $this->arguments = $arguments;
    }

    public static function create($commandID): RawCommand
    {
        $arguments = func_get_args();
        return new self($arguments);
    }

    public function getId(): string
    {
        return $this->commandID;
    }

    public function setRawArguments(array $arguments)
    {
        $this->setArguments($arguments);
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function setArguments(array $arguments)
    {
        $this->arguments = $arguments;
        unset($this->slot);
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
