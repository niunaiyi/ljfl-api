<?php

/**
 * @apiGroup           Dict
 * @apiName            updateDict
 *
 * @api                {PATCH} /v1/dicts/:id Endpoint title here..
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
$router->patch('dicts/{id}', [
	'as' => 'api_dict_update_dict',
	'uses' => 'Controller@updateDict',
	'middleware' => [
		'auth:api',
	],
]);
