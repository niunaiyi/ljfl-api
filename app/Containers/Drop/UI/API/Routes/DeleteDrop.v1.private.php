<?php

/**
 * @apiGroup           Drop
 * @apiName            deleteDrop
 *
 * @api                {DELETE} /v1/drops/:id Endpoint title here..
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
$router->delete('drops/{id}', [
    'as' => 'api_drop_delete_drop',
    'uses'  => 'Controller@deleteDrop',
    'middleware' => [
      'auth:api',
    ],
]);
