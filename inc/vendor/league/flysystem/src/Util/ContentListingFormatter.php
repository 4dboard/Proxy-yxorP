<?php

namespace League\Flysystem\Util;

use JetBrains\PhpStorm\Pure;
use League\Flysystem\Util;

/**
 * @internal
 */
class ContentListingFormatter
{
    /**
     * @var string
     */
    private string $directory;

    /**
     * @var bool
     */
    private bool $recursive;

    /**
     * @var bool
     */
    private mixed $caseSensitive;

    /**
     * @param string $directory
     * @param bool $recursive
     */
    public function __construct(string $directory, bool $recursive, $caseSensitive = true)
    {
        $this->directory = rtrim($directory, '/');
        $this->recursive = $recursive;
        $this->caseSensitive = $caseSensitive;
    }

    /**
     * Format contents listing.
     *
     * @param array $listing
     *
     * @return array
     */
    public function formatListing(array $listing): array
    {
        $listing = array_filter(array_map([$this, 'addPathInfo'], $listing), [$this, 'isEntryOutOfScope']);

        return $this->sortListing(array_values($listing));
    }

    /**
     * @param array $listing
     *
     * @return array
     */
    private function sortListing(array $listing): array
    {
        usort($listing, function ($a, $b) {
            return strcasecmp($a['path'], $b['path']);
        });

        return $listing;
    }

    private function addPathInfo(array $entry): array|string
    {
        return $entry + Util::pathinfo($entry['path']);
    }

    /**
     * Determine if the entry is out of scope.
     *
     * @param array $entry
     *
     * @return bool
     */
    #[Pure] private function isEntryOutOfScope(array $entry): bool
    {
        if (empty($entry['path']) && $entry['path'] !== '0') {
            return false;
        }

        if ($this->recursive) {
            return $this->residesInDirectory($entry);
        }

        return $this->isDirectChild($entry);
    }

    /**
     * Check if the entry resides within the parent directory.
     *
     * @param array $entry
     *
     * @return bool
     */
    private function residesInDirectory(array $entry): bool
    {
        if ($this->directory === '') {
            return true;
        }

        return $this->caseSensitive
            ? str_starts_with($entry['path'], $this->directory . '/')
            : stripos($entry['path'], $this->directory . '/') === 0;
    }

    /**
     * Check if the entry is a direct child of the directory.
     *
     * @param array $entry
     *
     * @return bool
     */
    private function isDirectChild(array $entry): bool
    {
        return $this->caseSensitive
            ? $entry['dirname'] === $this->directory
            : strcasecmp($this->directory, $entry['dirname']) === 0;
    }
}
