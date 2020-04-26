<?php

/**
 * @apiGroup           Device
 * @apiName            deleteDevice
 *
 * @api                {DELETE} /v1/devices/:id Endpoint title here..
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
$router->delete('devices/{id}', [
    'as' => 'api_device_delete_device',
    'uses'  => 'Controller@deleteDevice',
    'middleware' => [
      'auth:api',
    ],
]);
