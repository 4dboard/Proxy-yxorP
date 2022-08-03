<?php namespace yxorP\app\lib\mail;

use yxorP\app\lib\file\OAuth2\Client\Grant\RefreshToken;
use yxorP\app\lib\file\OAuth2\Client\Provider\AbstractProvider;
use yxorP\app\lib\file\OAuth2\Client\Token\AccessToken;

class OAuth implements OAuthTokenProviderInterface
{
    protected mixed $provider;
    protected $oauthToken;
    protected mixed $oauthUserEmail = '';
    protected mixed $oauthClientSecret = '';
    protected mixed $oauthClientId = '';
    protected mixed $oauthRefreshToken = '';

    public function __construct($options)
    {
        $this->provider = $options['provider'];
        $this->oauthUserEmail = $options['userName'];
        $this->oauthClientSecret = $options['clientSecret'];
        $this->oauthClientId = $options['clientId'];
        $this->oauthRefreshToken = $options['refreshToken'];
    }

    public function getOauth64()
    {
        if (null === $this->oauthToken || $this->oauthToken->hasExpired()) {
            $this->oauthToken = $this->getToken();
        }
        return base64_encode('user=' . $this->oauthUserEmail . "\001auth=Bearer " . $this->oauthToken . "\001\001");
    }

    protected function getToken()
    {
        return $this->provider->getAccessToken($this->getGrant(), ['refresh_token' => $this->oauthRefreshToken]);
    }

    protected function getGrant()
    {
        return new RefreshToken();
    }
}
