<?php

namespace app\Providers;

use Dingo\Api\Auth\Auth;
use Dingo\Api\Auth\Provider\OAuth2;
use Illuminate\Support\ServiceProvider;
use app\User;

class OAuthServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->app[Auth::class]->extend('oauth', function($app) {
			$provider = new OAuth2($app['oauth2-server.authorizer']->getChecker());

			$provider->setUserResolver(function ($id) {
				$user = User::find($id);

				return $user;
			});

			$provider->setClientResolver(function ($id) {
				// Logic to ruturn a client by their ID
			});
			return $provider;
		});
	}
	public function register ()
	{
		//
	}			
}
