<?php

/**
 * Application's routes.
 */

$app->post('/action', 'SatanGoss\Controller\BotController::webhookAction');
$app->post('/pvt/payments', 'SatanGoss\Controller\BotController::webhookAction');
$app->get('/twitter', 'SatanGoss\Controller\TwitterController::queryAction');
