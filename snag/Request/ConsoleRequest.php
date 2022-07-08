<?php namespace yxorP\bugsnag\Request;
class ConsoleRequest implements RequestInterface
{
    private array $command;

    public function __construct(array $command)
    {
        $this->command = $command;
    }

    public function isRequest(): bool
    {
        return false;
    }

    public function getSession(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getMetaData(): array
    {
        if (count($this->command) == 0) {
            return ['console' => ['Command' => 'Command could not be retrieved',],];
        }
        $commandString = implode(' ', $this->command);
        $primaryCommand = $this->command[0];
        $arguments = [];
        $options = [];
        foreach (array_slice($this->command, 1) as $arg) {
            if (isset($arg[0]) && $arg[0] === '-') {
                $options[] = $arg;
            } else {
                $arguments[] = $arg;
            }
        }
        $data = ['Input' => $commandString, 'Command' => $primaryCommand, 'Arguments' => $arguments, 'Options' => $options,];
        return ['console' => $data];
    }

    public function getContext(): ?string
    {
        return implode(' ', array_slice($this->command, 0, 4));
    }

    public function getUserId()
    {
        return null;
    }
}