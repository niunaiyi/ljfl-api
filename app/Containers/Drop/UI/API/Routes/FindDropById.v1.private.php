<?php

/**
 * @apiGroup           Drop
 * @apiName            findDropById
 *
 * @api                {GET} /v1/drops/:id Endpoint title here..
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
$router->get('drops/{id}', [
    'as' => 'api_drop_find_drop_by_id',
    'uses'  => 'Controller@findDropById',
    'middleware' => [
      'auth:api',
    ],
]);
