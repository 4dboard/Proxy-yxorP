<?php /* yxorP */

namespace Predis\Configuration;
class ExceptionsOption implements OptionInterface
{

    public function filter(OptionsInterface $options, $value)
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function getDefault(OptionsInterface $options): bool
    {
        return true;
    }
}
