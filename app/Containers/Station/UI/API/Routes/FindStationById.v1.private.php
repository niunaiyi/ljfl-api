<?php

/**
 * @apiGroup           Station
 * @apiName            findStationById
 *
 * @api                {GET} /v1/stations/:id Endpoint title here..
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
$router->get('stations/{id}', [
    'as' => 'api_station_find_station_by_id',
    'uses'  => 'Controller@findStationById',
    'middleware' => [
      'auth:api',
    ],
]);
