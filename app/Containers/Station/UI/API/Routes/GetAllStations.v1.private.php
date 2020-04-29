<?php

/**
 * @apiGroup           Station
 * @apiName            getAllStations
 *
 * @api                {GET} /v1/stations Endpoint title here..
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
$router->get('stations', [
    'as' => 'api_station_get_all_stations',
    'uses'  => 'Controller@getAllStations',
    'middleware' => [
      'auth:api',
    ],
]);
