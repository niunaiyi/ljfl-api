<?php

/**
 * @apiGroup           Station
 * @apiName            deleteStation
 *
 * @api                {DELETE} /v1/stations/:id Endpoint title here..
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
$router->delete('stations/{id}', [
    'as' => 'api_station_delete_station',
    'uses'  => 'Controller@deleteStation',
    'middleware' => [
      'auth:api',
    ],
]);
