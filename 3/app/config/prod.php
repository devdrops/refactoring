<?php

/**
 * Project's settings.
 */

$app['telegram.settings'] = [
    'bot_key' => getenv('TELEGRAM.BOT_KEY'),
    'webhook' => getenv('TELEGRAM.WEBHOOK'),
];

$app['twitter.settings'] = [
    'oauth_access_token' => getenv('TWITTER.ACCESS_TOKEN'),
    'oauth_access_token_secret' => getenv('TWITTER.ACCESS_TOKEN_SECRET'),
    'consumer_key' => getenv('TWITTER.CONSUMER_KEY'),
    'consumer_secret' => getenv('TWITTER.CONSUMER_SECRET'),
];
