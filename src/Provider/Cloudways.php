<?php 

namespace EthanClevenger91\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;

class Cloudways extends AbstractProvider
{

	use BearerAuthorizationTrait;

	protected $host = 'https://api.cloudways.com/api/v1';

	public function getBaseAuthorizationUrl() 
	{
		return $this->getHost() . '/not-used';
	}

	public function getBaseAccessTokenUrl(array $params)
	{
		return $this->getHost() . '/oauth/access_token';
	}

	public function getResourceOwnerDetailsUrl(AccessToken $token) 
	{
		/**
		 * Cloudways doesn't have this.
		 */
	}

	protected function getDefaultScopes() 
	{
		return [];
	}

	protected function checkResponse(ResponseInterface $response, $data) 
	{
		// More could be done here. See https://developers.cloudways.com/docs/
        if ($response->getStatusCode() != 200) {
            throw new IdentityProviderException('Unexpected response code', $response->getStatusCode(), $response);
        }
	}

	protected function createResourceOwner(array $response, AccessToken $token) {
		/**
		 * Cloudways doesn't have this.
		 */
	}

	protected function getAuthorizationParameters(array $options)
	{
		return [];
	}

	/**
     * Returns a cleaned host.
     *
     * @return string
     */
    public function getHost()
    {
        return rtrim($this->host, '/');
    }
}