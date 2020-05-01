<?php

/**
 * @apiGroup           Address
 * @apiName            findAddressByPosition
 *
 * @api                {GET} /v1/addresses/position Endpoint title here..
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
$router->get('addresses/position', [
    'as' => 'api_address_find_address_by_position',
    'uses'  => 'Controller@findAddressByPosition',
]);
