***

# OAuth

OAuth - OAuth2 authentication wrapper class.

Uses the oauth2-client package from the League of Extraordinary Packages.

* Full name: `\PHPMailer\PHPMailer\OAuth`

**See Also:**

* http://oauth2-client.thephpleague.com - 



## Properties


### provider

An instance of the League OAuth Client Provider.

```php
protected \League\OAuth2\Client\Provider\AbstractProvider $provider
```






***

### oauthToken

The current OAuth access token.

```php
protected \League\OAuth2\Client\Token\AccessToken $oauthToken
```






***

### oauthUserEmail

The user's email address, usually used as the login ID
and also the from address when sending email.

```php
protected string $oauthUserEmail
```






***

### oauthClientSecret

The client secret, generated in the app definition of the service you're connecting to.

```php
protected string $oauthClientSecret
```






***

### oauthClientId

The client ID, generated in the app definition of the service you're connecting to.

```php
protected string $oauthClientId
```






***

### oauthRefreshToken

The refresh token, used to obtain new AccessTokens.

```php
protected string $oauthRefreshToken
```






***

## Methods


### __construct

OAuth constructor.

```php
public __construct(array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Associative array containing<br />`provider`, `userName`, `clientSecret`, `clientId` and `refreshToken` elements |




***

### getGrant

Get a new RefreshToken.

```php
protected getGrant(): \League\OAuth2\Client\Grant\RefreshToken
```











***

### getToken

Get a new AccessToken.

```php
protected getToken(): \League\OAuth2\Client\Token\AccessToken
```











***

### getOauth64

Generate a base64-encoded OAuth token.

```php
public getOauth64(): string
```











***


***
> Automatically generated from source code comments on 2022-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
