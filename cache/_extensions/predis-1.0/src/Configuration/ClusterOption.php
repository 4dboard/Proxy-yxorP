<?php /* yxorP */

namespace Predis\Configuration;

use InvalidArgumentException;
use Predis\Connection\Aggregate\ClusterInterface;
use Predis\Connection\Aggregate\PredisCluster;
use Predis\Connection\Aggregate\RedisCluster;

class ClusterOption implements OptionInterface
{

    public function filter(OptionsInterface $options, $value): RedisCluster|ClusterInterface|PredisCluster
    {
        if (is_string($value)) {
            $value = $this->createByDescription($options, $value);
        }

        if (!$value instanceof ClusterInterface) {
            throw new InvalidArgumentException(
                "An instance of type 'Predis\Connection\Aggregate\ClusterInterface' was expected."
            );
        }

        return $value;
    }

    protected function createByDescription(OptionsInterface $options, $id): mixed
    {
        switch ($id) {
            case 'predis':
            case 'predis-cluster':
                return new PredisCluster();

            case 'redis':
            case 'redis-cluster':
                return new RedisCluster($options->connections);

            default:
        }
    }

    public function getDefault(OptionsInterface $options): PredisCluster
    {
        return new PredisCluster();
    }
}
