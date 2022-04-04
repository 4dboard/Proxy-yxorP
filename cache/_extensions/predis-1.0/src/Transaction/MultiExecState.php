<?php /* yxorP */

namespace Predis\Transaction;

use JetBrains\PhpStorm\Pure;

class MultiExecState
{
    public const INITIALIZED = 1;    // 0b00001
    public const INSIDEBLOCK = 2;    // 0b00010
    public const DISCARDED = 4;    // 0b00100
    public const CAS = 8;    // 0b01000
    public const WATCH = 16;   // 0b10000

    private int $flags;

    public function __construct()
    {
        $this->flags = 0;
    }

    public function set($flags): void
    {
        $this->flags = $flags;
    }

    public function get(): int
    {
        return $this->flags;
    }

    public function flag($flags): void
    {
        $this->flags |= $flags;
    }

    public function unflag($flags): void
    {
        $this->flags &= ~$flags;
    }

    public function reset(): void
    {
        $this->flags = 0;
    }

    public function isReset(): bool
    {
        return $this->flags === 0;
    }

    #[Pure] public function isInitialized(): bool
    {
        return $this->check(self::INITIALIZED);
    }

    public function check($flags): bool
    {
        return ($this->flags & $flags) === $flags;
    }

    #[Pure] public function isExecuting(): bool
    {
        return $this->check(self::INSIDEBLOCK);
    }

    #[Pure] public function isCAS(): bool
    {
        return $this->check(self::CAS);
    }

    #[Pure] public function isWatchAllowed(): bool
    {
        return $this->check(self::INITIALIZED) && !$this->check(self::CAS);
    }

    #[Pure] public function isWatching(): bool
    {
        return $this->check(self::WATCH);
    }

    #[Pure] public function isDiscarded(): bool
    {
        return $this->check(self::DISCARDED);
    }
}
