<?php

use EthanClevenger91\OAuth2\Client\Provider\Cloudways;

require_once('./../vendor/autoload.php');

$provider = new Cloudways();

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