<?php

/**
 * @apiGroup           Dict
 * @apiName            getAllDicts
 *
 * @api                {GET} /v1/dicts Endpoint title here..
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
$router->get('dicts', [
	'as' => 'api_dict_get_all_dicts',
	'uses' => 'Controller@getAllDicts',
	'middleware' => [
		'auth:api',
	],
]);
