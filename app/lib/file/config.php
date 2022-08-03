<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use function array_merge;

class config
{
    public const OPTION_VISIBILITY = 'visibility';
    public const OPTION_DIRECTORY_VISIBILITY = 'directory_visibility';
    private array $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    public function get(string $property, $default = null)
    {
        return $this->options[$property] ?? $default;
    }

    #[Pure] public function extend(array $options): config
    {
        return new config(array_merge($this->options, $options));
    }

    #[Pure] public function withDefaults(array $defaults): config
    {
        return new config($this->options + $defaults);
    }
}
