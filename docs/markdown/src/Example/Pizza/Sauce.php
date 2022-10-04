<?php

namespace PhpDocumentorMarkdown\Example\Pizza;

/**
 * Pizza sauce class.
 */
class Sauce
{
    /**
     * Tomato supplier.
     *
     * @var string
     */
    public static string $tomatoSupplier;
    /**
     * Sauce name.
     *
     * @var string
     */
    protected string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
