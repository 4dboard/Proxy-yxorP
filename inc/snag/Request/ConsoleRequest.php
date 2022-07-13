<?php

namespace yxorP\inc\snag\Request;

class ConsoleRequest implements RequestInterface
{
    /**
     * The unformated console command.
     *
     * @var string[]
     */
    protected array $command;

    /**
     * Create a new console request instance.
     *
     * @param string[] $command an array of the console command input
     *
     * @return void
     */
    public function __construct(array $command)
    {
        $this->command = $command;
    }

    /**
     * Are we currently processing a request?
     *
     * @return bool
     */
    public function isRequest(): bool
    {
        return false;
    }

    /**
     * Get the session data.
     *
     * @return array
     */
    public function getSession(): array
    {
        return [];
    }

    /**
     * Get the cookies.
     *
     * @return array
     */
    public function getCookies(): array
    {
        return [];
    }

    /**
     * Get the request formatted as meta data.
     *
     * @return array
     */
    public function getMetaData(): array
    {
        if (count($this->command) == 0) {
            return ['console' => [
                'Command' => 'Command could not be retrieved',],
            ];
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
        $data = [
            'Input' => $commandString,
            'Command' => $primaryCommand,
            'Arguments' => $arguments,
            'Options' => $options,
        ];

        return ['console' => $data];
    }

    /**
     * Get the request context.
     *
     * @return string|null
     */
    public function getContext(): ?string
    {
        return implode(' ', array_slice($this->command, 0, 4));
    }

    /**
     * Get the request user id.
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return null;
    }
}
