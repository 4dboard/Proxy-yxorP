<?php /* yxorP */


namespace Predis\Configuration;

use InvalidArgumentException;
use Predis\ClientException;
use Predis\Profile\Factory;
use Predis\Profile\ProfileInterface;
use Predis\Profile\RedisProfile;


class ProfileOption implements OptionInterface
{

    /**
     * @throws ClientException
     */
    public function filter(OptionsInterface $options, $value): ProfileInterface
    {
        if (is_string($value)) {
            $value = Factory::get($value);
            $this->setProcessors($options, $value);
        } elseif (!$value instanceof ProfileInterface) {
            throw new InvalidArgumentException('Invalid value for the profile option.');
        }

        return $value;
    }

    protected function setProcessors(OptionsInterface $options, ProfileInterface $profile): void
    {
        if (isset($options->prefix) && $profile instanceof RedisProfile) {
            // NOTE: directly using __get('prefix') is actually a workaround for
            // HHVM 2.3.0. It's correct and respects the options interface, it's
            // just ugly. We will remove this hack when HHVM will fix re-entrant
            // calls to __get() once and for all.

            $profile->setProcessor($options->__get('prefix'));
        }
    }

    public function getDefault(OptionsInterface $options)
    {
        try {
            $profile = Factory::getDefault();
        } catch (ClientException $e) {
        }
        $this->setProcessors($options, $profile);

        return $profile;
    }
}
