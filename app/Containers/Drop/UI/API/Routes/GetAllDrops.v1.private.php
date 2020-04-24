<?php

/**
 * @apiGroup           Drop
 * @apiName            getAllDrops
 *
 * @api                {GET} /v1/drops Endpoint title here..
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
$router->get('drops', [
    'as' => 'api_drop_get_all_drops',
    'uses'  => 'Controller@getAllDrops',
    'middleware' => [
      'auth:api',
    ],
]);
