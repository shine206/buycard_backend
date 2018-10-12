<?php

/**
 * @apiGroup           Card
 * @apiName            deleteCard
 *
 * @api                {DELETE} /v1/cards/:id Endpoint title here..
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
$router->delete('cards/{id}', [
    'as' => 'api_card_delete_card',
    'uses'  => 'Controller@deleteCard',
    'middleware' => [
      'auth:api',
    ],
]);
