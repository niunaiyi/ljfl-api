<?php

/**
 * @apiGroup           Device
 * @apiName            createDevice
 *
 * @api                {POST} /v1/devices Endpoint title here..
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
$router->post('devices', [
    'as' => 'api_device_create_device',
    'uses'  => 'Controller@createDevice',
    'middleware' => [
      'auth:api',
    ],
]);
