<?php

/**
 * @apiGroup           OAuth2
 * @apiName            LoginPasswordGrant
 * @api                {post} /v1/login Login (Password Grant)
 * @apiDescription     Login Users using their username and passwords. (For First-Party Clients)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  username 用户名称
 * @apiParam           {String}  password 密码
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
 * {
 * "token_type": "Bearer",
 * "expires_in": 315360000,
 * "access_token": "eyJ0eXAiOiJKV1QiLCJhbG...",
 * "refresh_token": "Oukd61zgKzt8TBwRjnasd..."
 * }
 */

// Implementation in the Laravel Passport package

$router->post('mplogin', [
	'as' => 'api_authentication_mplogin',
	'uses' => 'Controller@login',
]);
