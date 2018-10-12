<?php

/**
 * @apiGroup           Card
 * @apiName            getAllCards
 *
 * @api                {GET} /v1/cards Endpoint title here..
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
$router->get('cards', [
    'as' => 'api_card_get_all_cards',
    'uses'  => 'Controller@getAllCards',
    'middleware' => [
      'auth:api',
    ],
]);
