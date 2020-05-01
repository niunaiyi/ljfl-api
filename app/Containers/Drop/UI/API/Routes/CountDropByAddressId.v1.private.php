<?php

/**
 * @apiGroup           Drop
 * @apiName            CountDropByAddressId
 *
 * @api                {GET} /v1/drops/addresses/:id 根据地址统计投放
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
$router->get('drops/addresses/{id}', [
    'as' => 'api_count_drops_addresses_id',
    'uses'  => 'Controller@countDropByAddressId',
    'middleware' => [
      'auth:api',
    ],
]);
