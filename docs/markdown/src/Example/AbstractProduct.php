<?php

namespace PhpDocumentorMarkdown\Example;

/**
 * Base class for all products.
 */
abstract class AbstractProduct implements ProductInterface
{
    /**
     * Get the tax rate for the product.
     *
     * @return float
     */
    public function getTaxRate(): float
    {
        return 24.0;
    }
}
