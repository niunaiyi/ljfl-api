<?php

/**
 * @apiGroup           Dict
 * @apiName            findDictById
 *
 * @api                {GET} /v1/dicts/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 * // Insert the response of the request here...
 * }
 */

/** @var Route $router */
$router->get('dicts/type/{type}', [
	'as' => 'api_dict_find_dict_by_type',
	'uses' => 'Controller@findDictByType',
	'middleware' => [
		'auth:api',
	],
]);
