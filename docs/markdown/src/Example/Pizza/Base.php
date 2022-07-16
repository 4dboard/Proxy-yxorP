<?php

namespace PhpDocumentorMarkdown\Example\Pizza;

/**
 * Represents a pizza base.
 */
class Base
{
    private const YEAST_SOURDOUGH_STARTER = 0b01;
    public const  YEAST_FRESH             = 0b10;
    public const  YEAST_ACTIVE_DRY        = 0b11;

    /**
     * The sauce used.
     *
     * @var Sauce
     */
    protected Sauce $sauce;

    /**
     * Type of yeast used.
     *
     * @var int
     */
    protected int $yeast;

    /**
     * @param  Sauce  $sauce
     * @param  int  $yeast
     */
    public function __construct(Sauce $sauce, int $yeast = self::YEAST_SOURDOUGH_STARTER)
    {
        $this->sauce = $sauce;
        $this->yeast = $yeast;
    }

    /**
     * @return Sauce
     */
    public function getSauce(): Sauce
    {
        return $this->sauce;
    }

    /**
     * @return int
     */
    public function getYeast(): int
    {
        return $this->yeast;
    }
}
