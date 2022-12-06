# Cloudways Provider for OAuth 2.0 Client

This package provides Cloudways OAuth 2.0 support for the PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client).

## Installation

To install, use composer:

```
composer require ethanclevenger91/oauth2-cloudways
```

## Usage

Usage is the same as The League's OAuth client, using `EthanClevenger91\OAuth2\Client\Provider\Cloudways` as the provider.

Cloudways uses the client credentials grant.

### Authorization Code Flow

```php

$provider = new EthanClevenger91\OAuth2\Client\Provider\Cloudways();

try {
	// Try to get an access token using the client credentials grant.
	$accessToken = $provider->getAccessToken('client_credentials', [
		'email' => 'email@example.org',
		'api_key' => 'apikey',
	]);
	
} catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
	
	// Failed to get the access token
	exit($e->getMessage());
	
}
```

## Credits

- [Ethan Clevenger](https://github.com/ethanclevenger91)
- [Steven Maguire's Existing Work](https://github.com/stevenmaguire/oauth2-bitbucket)
- [All Contributors](https://github.com/ethanclevenger91/oauth2-cloudways/contributors)
