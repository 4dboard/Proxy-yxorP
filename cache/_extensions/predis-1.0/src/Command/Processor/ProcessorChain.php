<?php /* yxorP */

namespace Predis\Command\Processor;

use ArrayAccess;
use ArrayIterator;
use InvalidArgumentException;
use Predis\Command\CommandInterface;

/**
 * @property array $processors
 */
class ProcessorChain implements ArrayAccess, ProcessorInterface
{
    private array $processors = array();

    public function __construct($processors = array())
    {
        foreach ($processors as $processor) {
            $this->add($processor);
        }
    }

    public function add(ProcessorInterface $processor): void
    {
        $this->processors[] = $processor;
    }

    public function remove(ProcessorInterface $processor): void
    {
        if (false !== $index = array_search($processor, $this->processors, true)) {
            unset($this[$index]);
        }
    }

    public function process(CommandInterface $command)
    {
        for ($i = 0; $i < $count = count($this->processors); $i++) {
            $this->processors[$i]->process($command);
        }
    }

    public function getProcessors(): array
    {
        return $this->processors;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->processors);
    }

    public function count(): int
    {
        return count($this->processors);
    }

    public function offsetExists($index): bool
    {
        return isset($this->processors[$index]);
    }

    public function offsetGet($index)
    {
        return $this->processors[$index];
    }

    public function offsetSet($index, $processor)
    {
        if (!$processor instanceof ProcessorInterface) {
            throw new InvalidArgumentException(
                "A processor chain accepts only instances of " .
                "'Predis\Command\Processor\ProcessorInterface'."
            );
        }

        $this->processors[$index] = $processor;
    }

    public function offsetUnset($index)
    {
        unset($this->processors[$index]);
        $this->processors = array_values($this->processors);
    }
}
