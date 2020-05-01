<?php

/**
 * @apiGroup           Address
 * @apiName            findAddressById
 *
 * @api                {GET} /v1/addresses/:id 根据标识查找地址
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      token
 *
 * @apiParam           {Number}  id 地址标识
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 *    "data": {
 *        "name": "1502",
 *        "dzlx_value": 101007,
 *        "hylx_value": 102001,
 *        "position": {
 *            "lat":32.82761129,
 *            "lng":117.23366095
 *        },
 *        "parent_name": "安徽省.合肥市.经开区.海恒社区.近春园居委会.滨湖时光.B03",
 *        "updated_at": "2020-04-22T07:26:32.000000Z",
 *        "created_at": "2020-04-22T07:26:32.000000Z",
 *        "id": 51103,
 *        "object": "Address",
 *        "hasChildren": true,
 *        "parent_id": "41",
 *    },
 *    "meta": {
 *        "include": [],
 *        "custom": []
 *    }
 * }
 */

/** @var Route $router */
$router->get('addresses/{id}/position/{position}', [
	'as' => 'api_address_find_address_by_position',
	'uses' => 'Controller@findAddressByPosition',
	'middleware' => [
		'auth:api',
	],
]);
