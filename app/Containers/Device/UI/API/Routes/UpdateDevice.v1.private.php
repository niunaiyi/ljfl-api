<?php

/**
 * @apiGroup           Device
 * @apiName            updateDevice
 *
 * @api                {PATCH} /v1/devices/:id Endpoint title here..
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
$router->patch('devices/{id}', [
    'as' => 'api_device_update_device',
    'uses'  => 'Controller@updateDevice',
    'middleware' => [
      'auth:api',
    ],
]);
