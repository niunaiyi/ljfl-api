<?php

/**
 * @apiGroup           Station
 * @apiName            createStation
 *
 * @api                {POST} /v1/stations Endpoint title here..
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
$router->post('stations', [
    'as' => 'api_station_create_station',
    'uses'  => 'Controller@createStation',
    'middleware' => [
      'auth:api',
    ],
]);
