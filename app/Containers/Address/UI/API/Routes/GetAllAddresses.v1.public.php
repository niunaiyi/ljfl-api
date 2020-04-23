<?php

/**
 * @apiGroup           Address
 * @apiName            getAllAddresses
 *
 * @api                {GET} /v1/addresses 获取所有地址
 * @apiDescription     可以进行查询操作，如:/v1/addresses?search=安徽
 *
 * @apiVersion         1.0.0
 * @apiPermission      token
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 *{
 *    "data": [
 *        {
 *            "id": 1489,
 *            "name": "1104",
 *            "dzlx_value": 101007,
 *            "hylx_value": 102001,
 *            "position": "{\"lat\": 31.82761109, \"lng\": 117.23366095}",
 *            "parent_name": "安徽省.合肥市.经开区.海恒社区.近春园居委会.滨湖时光.C02.1104",
 *            "created_at": "2019-12-01T06:00:07.000000Z",
 *            "updated_at": "2020-01-14T16:40:00.000000Z",
 *            "object": "Address",
 *            "hasChildren": false,
 *            "parent_id": "217"
 *
 *        {
 *            "id": 5239,
 *            "name": "1604",
 *            "dzlx_value": 101007,
 *            "hylx_value": 102001,
 *            "position": "{\"lat\": 31.82761109, \"lng\": 117.23366095}",
 *            "parent_name": "安徽省.合肥市.经开区.海恒社区.近春园居委会.滨湖时光.C02.1604",
 *            "created_at": "2019-12-01T06:00:27.000000Z",
 *            "updated_at": "2020-01-14T16:40:25.000000Z",
 *            "object": "Address",
 *            "hasChildren": false,
 *            "parent_id": "217"
 *        }
 *    ]
 *}
 */

/** @var Route $router */
$router->get('addresses', [
	'as' => 'api_address_get_all_addresses',
	'uses' => 'Controller@getAllAddresses',
	'middleware' => [
		'auth:api',
	],
]);
