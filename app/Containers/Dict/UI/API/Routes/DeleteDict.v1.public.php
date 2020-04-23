<?php

/**
 * @apiGroup           Dict
 * @apiName            deleteDict
 *
 * @api                {DELETE} /v1/dicts/:id Endpoint title here..
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
$router->delete('dicts/{id}', [
	'as' => 'api_dict_delete_dict',
	'uses' => 'Controller@deleteDict',
	'middleware' => [
		'auth:api',
	],
]);
