<?php

/**
 * @apiGroup           Drop
 * @apiName            updateDrop
 *
 * @api                {PATCH} /v1/drops/:id Endpoint title here..
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
$router->patch('drops/{id}', [
    'as' => 'api_drop_update_drop',
    'uses'  => 'Controller@updateDrop',
    'middleware' => [
      'auth:api',
    ],
]);
