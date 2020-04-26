<?php

/**
 * @apiGroup           Device
 * @apiName            findDeviceById
 *
 * @api                {GET} /v1/devices/:id Endpoint title here..
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
$router->get('devices/{id}', [
    'as' => 'api_device_find_device_by_id',
    'uses'  => 'Controller@findDeviceById',
    'middleware' => [
      'auth:api',
    ],
]);
