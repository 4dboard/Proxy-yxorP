<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use ReturnTypeWillChange;
use stdClass;
use yxorP\app\lib\openapi\Generator;

/**
 * Configuration details for a supported OAuth Flow
 * [OAuth Flow Object](https://swagger.io/specification/#oauthFlowObject).
 *
 * @Annotation
 */
class Flow extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['scopes', 'flow'];
    /**
     * @inheritdoc
     */
    public static array $_blacklist = ['_context', '_unmerged'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'flow' => ['implicit', 'password', 'authorizationCode', 'clientCredentials'],
        'refreshUrl' => 'string',
        'authorizationUrl' => 'string',
        'tokenUrl' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        SecurityScheme::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * The authorization url to be used for this flow.
     * This must be in the form of a url.
     *
     * @var string
     */
    public string $authorizationUrl = Generator::UNDEFINED;
    /**
     * The token URL to be used for this flow.
     * This must be in the form of a url.
     *
     * @var string
     */
    public string $tokenUrl = Generator::UNDEFINED;
    /**
     * The URL to be used for obtaining refresh tokens.
     * This must be in the form of a url.
     *
     * @var string
     */
    public string $refreshUrl = Generator::UNDEFINED;
    /**
     * Flow name. One of ['implicit', 'password', 'authorizationCode', 'clientCredentials'].
     *
     * @var string
     */
    public string $flow = Generator::UNDEFINED;
    /**
     * The available scopes for the OAuth2 security scheme. A map between the scope name and a short description for it.
     */
    public string $scopes = Generator::UNDEFINED;

    /** @inheritdoc */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {

        return parent::jsonSerialize();
    }
}
