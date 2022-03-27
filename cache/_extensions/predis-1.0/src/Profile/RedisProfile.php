<?php /* yxorP */


namespace Predis\Profile;

use InvalidArgumentException;
use Predis\ClientException;
use Predis\Command\CommandInterface;
use Predis\Command\Processor\ProcessorInterface;
use ReflectionClass;


abstract class RedisProfile implements ProfileInterface
{
    private $commands;
    private $processor;


    public function __construct()
    {
        $this->commands = $this->getSupportedCommands();
    }


    abstract protected function getSupportedCommands();

    public function supportsCommands(array $commandIDs): bool
    {
        foreach ($commandIDs as $commandID) {
            if (!$this->supportsCommand($commandID)) {
                return false;
            }
        }

        return true;
    }

    public function supportsCommand($commandID): bool
    {
        return isset($this->commands[strtoupper($commandID)]);
    }

    public function getCommandClass($commandID): void
    {
        if (isset($this->commands[$commandID = strtoupper($commandID)])) {
            return $this->commands[$commandID];
        }
    }


    /**
     * @throws ClientException
     */
    public function createCommand($commandID, array $arguments = array())
    {
        $commandID = strtoupper($commandID);

        if (!isset($this->commands[$commandID])) {
            throw new ClientException("Command '$commandID' is not a registered Redis command.");
        }

        $commandClass = $this->commands[$commandID];
        $command = new $commandClass();
        $command->setArguments($arguments);

        if (isset($this->processor)) {
            $this->processor->process($command);
        }

        return $command;
    }


    public function defineCommand($commandID, $class): void
    {
        $reflection = new ReflectionClass($class);

        if (!$reflection->isSubclassOf(CommandInterface::class)) {
            throw new InvalidArgumentException("The class '$class' is not a valid command class.");
        }

        $this->commands[strtoupper($commandID)] = $class;
    }

    public function getProcessor()
    {
        return $this->processor;
    }

    public function setProcessor(ProcessorInterface $processor = null): void
    {
        $this->processor = $processor;
    }

    public function __toString()
    {
        return $this->getVersion();
    }
}
