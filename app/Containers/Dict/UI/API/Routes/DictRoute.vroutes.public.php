<?php

/**
 * @apiGroup           Dict
 * @apiName            dicts
 *
 * @api                {GET} /vroutes/:id Endpoint title here..
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
$router->get('{id}', [
  'as' => 'api_dict_dicts',
  'uses' => 'Controller@dicts',
  'middleware' => [
    'auth:api',
  ],
]);
