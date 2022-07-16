<?php

namespace PhpDocumentorMarkdown\Example;

/**
 * A trait for reviewable objects.
 */
trait ReviewableTrait
{
    /**
     * @var array $reviews Product reviews.
     */
    public static array $reviews = [];

    /**
     * Whether the object has been reviewed.
     *
     * @return bool
     */
    public function isReviewed(): bool
    {
        return true;
    }
}
