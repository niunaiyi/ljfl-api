<?php

/**
 * @apiGroup           Address
 * @apiName            deleteAddress
 *
 * @api                {DELETE} /v1/addresses/:id 删除地址
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      token
 *
 * @apiParam           {Number}  id 地址标识
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 OK
 * {
 * }
 */

/** @var Route $router */
$router->delete('addresses/{id}', [
	'as' => 'api_address_delete_address',
	'uses' => 'Controller@deleteAddress',
	'middleware' => [
		'auth:api',
	],
]);
