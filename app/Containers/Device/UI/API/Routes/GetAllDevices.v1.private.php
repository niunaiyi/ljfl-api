<?php

/**
 * @apiGroup           Device
 * @apiName            getAllDevices
 *
 * @api                {GET} /v1/devices Endpoint title here..
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
$router->get('devices', [
    'as' => 'api_device_get_all_devices',
    'uses'  => 'Controller@getAllDevices',
    'middleware' => [
      'auth:api',
    ],
]);
