<?php /* yxorP */

namespace Predis\Connection;

use InvalidArgumentException;
use Predis\Command\RawCommand;
use ReflectionClass;
use UnexpectedValueException;

class Factory implements FactoryInterface
{
    protected array $schemes = array(
        'tcp' => StreamConnection::class,
        'unix' => StreamConnection::class,
        'http' => WebdisConnection::class,
    );

    public function define($scheme, $initializer)
    {
        $this->schemes[$scheme] = $this->checkInitializer($initializer);
    }

    protected function checkInitializer($initializer): callable
    {
        if (is_callable($initializer)) {
            return $initializer;
        }

        $class = new ReflectionClass($initializer);

        if (!$class->isSubclassOf(NodeConnectionInterface::class)) {
            throw new InvalidArgumentException(
                'A connection initializer must be a valid connection class or a callable object.'
            );
        }

        return $initializer;
    }

    public function undefine($scheme)
    {
        unset($this->schemes[$scheme]);
    }

    public function aggregate(AggregateConnectionInterface $connection, array $parameters)
    {
        foreach ($parameters as $node) {
            $connection->add($node instanceof NodeConnectionInterface ? $node : $this->create($node));
        }
    }

    public function create($parameters): NodeConnectionInterface
    {
        if (!$parameters instanceof ParametersInterface) {
            $parameters = $this->createParameters($parameters);
        }

        $scheme = $parameters->scheme;

        if (!isset($this->schemes[$scheme])) {
            throw new InvalidArgumentException("Unknown connection scheme: '$scheme'.");
        }

        $initializer = $this->schemes[$scheme];

        if (is_callable($initializer)) {
            $connection = $initializer($parameters, $this);
        } else {
            $connection = new $initializer($parameters);
            $this->prepareConnection($connection);
        }

        if (!$connection instanceof NodeConnectionInterface) {
            throw new UnexpectedValueException(
                "Objects returned by connection initializers must implement " .
                "'Predis\Connection\NodeConnectionInterface'."
            );
        }

        return $connection;
    }

    protected function createParameters($parameters): Parameters
    {
        return Parameters::create($parameters);
    }

    protected function prepareConnection(NodeConnectionInterface $connection): void
    {
        $parameters = $connection->getParameters();

        if (isset($parameters->password)) {
            $connection->addConnectCommand(
                new RawCommand(array('AUTH', $parameters->password))
            );
        }

        if (isset($parameters->database)) {
            $connection->addConnectCommand(
                new RawCommand(array('SELECT', $parameters->database))
            );
        }
    }
}
