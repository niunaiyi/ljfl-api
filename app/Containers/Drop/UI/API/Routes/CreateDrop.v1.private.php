<?php

/**
 * @apiGroup           Drop
 * @apiName            createDrop
 *
 * @api                {POST} /v1/drops Endpoint title here..
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
$router->post('drops', [
    'as' => 'api_drop_create_drop',
    'uses'  => 'Controller@createDrop',
    'middleware' => [
      'auth:api',
    ],
]);
