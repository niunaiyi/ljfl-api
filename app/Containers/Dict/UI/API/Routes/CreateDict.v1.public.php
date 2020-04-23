<?php

/**
 * @apiGroup           Dict
 * @apiName            createDict
 *
 * @api                {POST} /v1/dicts Endpoint title here..
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

$router->post('dicts', [
	'as' => 'api_dict_create_dict',
	'uses' => 'Controller@createDict',
	'middleware' => [
		'auth:api',
	],
]);
