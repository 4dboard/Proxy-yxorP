<?php /* yxorP */

namespace Predis\Configuration;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Predis\Connection\Factory;
use Predis\Connection\FactoryInterface;

class ConnectionFactoryOption implements OptionInterface
{

    public function filter(OptionsInterface $options, $value): FactoryInterface|Factory
    {
        if ($value instanceof FactoryInterface) {
            return $value;
        }

        if (is_array($value)) {
            $factory = $this->getDefault($options);

            foreach ($value as $scheme => $initializer) {
                $factory->define($scheme, $initializer);
            }

            return $factory;
        }

        throw new InvalidArgumentException(
            'Invalid value provided for the connections option.'
        );
    }

    #[Pure] public function getDefault(OptionsInterface $options): Factory
    {
        return new Factory();
    }
}
