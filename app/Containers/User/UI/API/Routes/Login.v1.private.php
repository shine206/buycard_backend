<?php

/**
 * @apiGroup           Users
 * @apiName            createAdmin
 * @api                {post} /v1/admins Create Admin type Users
 * @apiDescription     Creating non client Users, form the Dashboard.
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email
 * @apiParam           {String}  password
 * @apiParam           {String}  name
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('login', [
    'as' => 'api_user_login',
    'uses'  => 'Controller@login',
//    'middleware' => [
//        'auth:api',
//    ],
]);
