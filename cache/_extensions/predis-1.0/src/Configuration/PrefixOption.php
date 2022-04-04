<?php /* yxorP */

namespace Predis\Configuration;

use JetBrains\PhpStorm\Pure;
use Predis\Command\Processor\KeyPrefixProcessor;
use Predis\Command\Processor\ProcessorInterface;

class PrefixOption implements OptionInterface
{

    #[Pure] public function filter(OptionsInterface $options, $value): ProcessorInterface|KeyPrefixProcessor
    {
        if ($value instanceof ProcessorInterface) {
            return $value;
        }

        return new KeyPrefixProcessor($value);
    }

    public function getDefault(OptionsInterface $options)
    {
        // NOOP
    }
}
