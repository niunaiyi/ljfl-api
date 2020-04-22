<?php

/**
 * @apiGroup           Address
 * @apiName            createAddress
 * @api                {POST} /v1/addresses 新增地址
 * @apiDescription     新增一个地址
 * @apiHeader          Accept application/json
 *
 * @apiVersion         1.0.0
 * @apiPermission      token
 *
 * @apiParam           {String}  name 名称
 * @apiParam           {Number}  dzlx_value 地址类型</br>
 *                               101001:行政区划</br>
 *                               101002:行政区划</br>
 *                               101003:社区</br>
 *                               101004:住宅小区</br>
 *                               101005:住宅楼</br>
 *                               101006:写字楼</br>
 *                               101007:商业区</br>
 *                               101008:地址</br>
 * @apiParam           {Number}  hylx_value 行业类型</br>
 *                               102001:其它</br>
 *                               102002:医院</br>
 *                               102003:学校</br>
 *                               102004:住宅</br>
 *                               102005:党政机关</br>
 *                               102006:企业</br>
 * @apiParam          {json}     position  地理位置
 * @apiParam           {Number}  parent_id 上级地址
 *
 * @apiParamExample {json} position:
 *    {
 *     "lat": 32.82761129,
 *     "lng": 117.23366095
 *    }
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 *	"data": {
 *		"name": "1502",
 *		"dzlx_value": 101007,
 *		"hylx_value": 102001,
 *		"position": {
 * 			"lat":32.82761129,
 * 			"lng":117.23366095
 * 		},
 *		"parent_name": "安徽省.合肥市.经开区.海恒社区.近春园居委会.滨湖时光.B03",
 *		"updated_at": "2020-04-22T07:26:32.000000Z",
 *		"created_at": "2020-04-22T07:26:32.000000Z",
 *		"id": 51103,
 *		"object": "Address",
 *		"hasChildren": true,
 *		"parent_id": "41",
 *	},
 *	"meta": {
 *		"include": [],
 *		"custom": []
 *	}
 * }
 */

/** @var Route $router */
$router->post('addresses', [
	'as' => 'api_address_create_address',
	'uses' => 'Controller@createAddress',
	'middleware' => [
		'auth:api',
	],
]);
