<?php

/**
 * @apiGroup           Users
 * @apiName            createAdmin
 * @api                {post} /v1/admins Create Admin type Users
 * @apiDescription     创建一个管理员.
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  username
 * @apiParam           {String}  realname
 * @apiParam           {String}  password
 * @apiParam           {String}  phonenumber
 * @apiParam           {Number}  address_id
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('users', [
	'as' => 'api_user_create_user`',
	'uses' => 'Controller@createUser',
	'middleware' => [
		'auth:api',
	],
]);
