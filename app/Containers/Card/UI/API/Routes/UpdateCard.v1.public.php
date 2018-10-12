<?php

/**
 * @apiGroup           Card
 * @apiName            updateCard
 *
 * @api                {PATCH} /v1/cards/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('cards/{id}', [
    'as' => 'api_card_update_card',
    'uses'  => 'Controller@updateCard',
    'middleware' => [
      'auth:api',
    ],
]);
