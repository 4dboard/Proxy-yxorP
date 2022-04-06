<?php /* yxorP */

namespace Predis\Configuration;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

/**
 * @property mixed|void|null $exceptions
 * @property mixed|void|null $connections
 * @property mixed|void|null $cluster
 * @property mixed|void|null $replication
 * @property mixed|void|null $aggregate
 * @property mixed|void|null $profile
 * @property string[] $handlers
 * @property array $options
 * @property array $input
 */
class Options implements OptionsInterface
{
    protected array $input;
    protected array $options;
    protected array $handlers;

    #[Pure] public function __construct(array $options = array())
    {
        $this->input = $options;
        $this->options = array();
        $this->handlers = $this->getHandlers();
    }

    #[ArrayShape(['cluster' => "string", 'connections' => "string", 'exceptions' => "string", 'prefix' => "string", 'profile' => "string", 'replication' => "string"])] protected function getHandlers(): array
    {
        return array(
            'cluster' => ClusterOption::class,
            'connections' => ConnectionFactoryOption::class,
            'exceptions' => ExceptionsOption::class,
            'prefix' => PrefixOption::class,
            'profile' => ProfileOption::class,
            'replication' => ReplicationOption::class,
        );
    }

    public function defined($option): bool
    {
        return (
            array_key_exists($option, $this->options) ||
            array_key_exists($option, $this->input)
        );
    }

    public function __isset($option)
    {
        return (
                array_key_exists($option, $this->options) ||
                array_key_exists($option, $this->input)
            ) && $this->__get($option) !== null;
    }

    public function __get($option)
    {
        if (isset($this->options[$option]) || array_key_exists($option, $this->options)) {
            return $this->options[$option];
        }

        if (isset($this->input[$option]) || array_key_exists($option, $this->input)) {
            $value = $this->input[$option];
            unset($this->input[$option]);

            if (method_exists($value, '__invoke')) {
                $value = $value($this, $option);
            }

            if (isset($this->handlers[$option])) {
                $handler = $this->handlers[$option];
                $handler = new $handler();
                $value = $handler->filter($this, $value);
            }

            return $this->options[$option] = $value;
        }

        if (isset($this->handlers[$option])) {
            return $this->options[$option] = $this->getDefault($option);
        }

        return null;
    }

    public function getDefault($option): mixed
    {
        if (isset($this->handlers[$option])) {
            $handler = $this->handlers[$option];
            $handler = new $handler();

            return $handler->getDefault($this);
        }
    }
}
