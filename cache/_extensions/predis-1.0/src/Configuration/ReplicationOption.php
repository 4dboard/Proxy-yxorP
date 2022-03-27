<?php /* yxorP */


namespace Predis\Configuration;

use InvalidArgumentException;
use Predis\Connection\Aggregate\MasterSlaveReplication;
use Predis\Connection\Aggregate\ReplicationInterface;


class ReplicationOption implements OptionInterface
{

    public function filter(OptionsInterface $options, $value): MasterSlaveReplication|ReplicationInterface|null
    {
        if ($value instanceof ReplicationInterface) {
            return $value;
        }

        if (is_bool($value) || $value === null) {
            return $value ? $this->getDefault($options) : null;
        }

        if (
            !is_object($value) &&
            null !== $asbool = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)
        ) {
            return $asbool ? $this->getDefault($options) : null;
        }

        throw new InvalidArgumentException(
            "An instance of type 'Predis\Connection\Aggregate\ReplicationInterface' was expected."
        );
    }


    public function getDefault(OptionsInterface $options): MasterSlaveReplication
    {
        return new MasterSlaveReplication();
    }
}
