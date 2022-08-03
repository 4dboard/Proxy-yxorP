<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

/**
 * @Annotation
 */
class Put extends Operation
{
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        PathItem::class,
    ];
    /**
     * @inheritdoc
     */
    public string $method = 'put';
}
