<?php

namespace PhpDocumentorMarkdown\Example;

/**
 * Interface for a product.
 */
interface ProductInterface
{
    /**
     * @param string $name Product name.
     * @param float  $price Product price.
     */
    public function __construct(string $name, float $price);

    /**
     * Get the name of the product.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the price of the product.
     *
     * @return float
     */
    public function getPrice(): float;

    /**
     * Get the tax rate for this product.
     *
     * @return float
     */
    public function getTaxRate(): float;
}
