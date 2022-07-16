<?php

namespace PhpDocumentorMarkdown\Example\Pizza;

/**
 * Pizza sauce class.
 */
class Sauce
{
    /**
     * Sauce name.
     *
     * @var string
     */
    protected string $name;

    /**
     * Tomato supplier.
     *
     * @var string
     */
    public static string $tomatoSupplier;

    /**
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
