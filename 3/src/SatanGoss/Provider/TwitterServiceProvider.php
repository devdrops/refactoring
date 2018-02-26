<?php

namespace SatanGoss\Provider;

use Abraham\TwitterOAuth\TwitterOAuth;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class TwitterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['twitter'] = new TwitterOAuth(
            $app['twitter.settings']['consumer_key'],
            $app['twitter.settings']['consumer_secret'],
            $app['twitter.settings']['oauth_access_token'],
            $app['twitter.settings']['oauth_access_token_secret']
        );
    }
}
