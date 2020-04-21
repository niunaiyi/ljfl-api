<?php

namespace App\Containers\Dict\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\DB;

class DictSeeder extends Seeder
{
  public function run()
  {
    DB::table('dicts')->delete();
    DB::table('dicts')->insert(array(
      0 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 1,
          'name' => '行政区划',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101001,
        ),
      1 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 13:05:58',
          'desc' => '地址类型',
          'id' => 2,
          'name' => '社区',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 13:05:58',
          'value' => 101002,
        ),
      2 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 3,
          'name' => '住宅小区',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101003,
        ),
      3 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 4,
          'name' => '住宅楼',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101004,
        ),
      4 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 5,
          'name' => '写字楼',
          'type' => 'dxlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101005,
        ),
      5 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 6,
          'name' => '商业区',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101006,
        ),
      6 =>
        array(
          'code' => 'abcd',
          'created_at' => '2019-11-29 12:06:33',
          'desc' => '地址类型',
          'id' => 7,
          'name' => '地址',
          'type' => 'dzlx',
          'updated_at' => '2019-11-29 12:06:33',
          'value' => 101007,
        ),
      7 =>
        array(
          'code' => '1',
          'created_at' => '2019-12-20 13:29:52',
          'desc' => '行业类型',
          'id' => 8,
          'name' => '其它',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:29:52',
          'value' => 102001,
        ),
      8 =>
        array(
          'code' => '2',
          'created_at' => '2019-12-20 13:30:19',
          'desc' => '行业类型',
          'id' => 9,
          'name' => '医院',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:30:19',
          'value' => 102002,
        ),
      9 =>
        array(
          'code' => '3',
          'created_at' => '2019-12-20 13:30:42',
          'desc' => '行业类型',
          'id' => 10,
          'name' => '学校',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:30:42',
          'value' => 102003,
        ),
      10 =>
        array(
          'code' => '4',
          'created_at' => '2019-12-20 13:31:01',
          'desc' => '行业类型',
          'id' => 11,
          'name' => '住宅',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:31:01',
          'value' => 102004,
        ),
      11 =>
        array(
          'code' => '5',
          'created_at' => '2019-12-20 13:31:20',
          'desc' => '行业类型',
          'id' => 12,
          'name' => '党政机关',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:31:20',
          'value' => 102005,
        ),
      12 =>
        array(
          'code' => '6',
          'created_at' => '2019-12-20 13:31:48',
          'desc' => '行业类型',
          'id' => 13,
          'name' => '企业',
          'type' => 'hylx',
          'updated_at' => '2019-12-20 13:31:48',
          'value' => 102006,
        ),
      13 =>
        array(
          'code' => '1',
          'created_at' => '2019-12-23 19:37:08',
          'desc' => '设备类型',
          'id' => 14,
          'name' => '其他',
          'type' => 'sblx',
          'updated_at' => '2019-12-23 19:37:08',
          'value' => 103001,
        ),
      14 =>
        array(
          'code' => '2',
          'created_at' => '2019-12-23 19:37:26',
          'desc' => '设备类型',
          'id' => 15,
          'name' => '可回收垃圾桶',
          'type' => 'sblx',
          'updated_at' => '2019-12-23 19:37:26',
          'value' => 103002,
        ),
      15 =>
        array(
          'code' => '3',
          'created_at' => '2019-12-23 19:37:57',
          'desc' => '设备类型',
          'id' => 16,
          'name' => '厨余垃圾桶',
          'type' => 'sblx',
          'updated_at' => '2019-12-23 19:37:57',
          'value' => 103003,
        ),
      16 =>
        array(
          'code' => '4',
          'created_at' => '2019-12-23 19:38:19',
          'desc' => '设备类型',
          'id' => 17,
          'name' => '有毒垃圾桶',
          'type' => 'sblx',
          'updated_at' => '2019-12-23 19:38:19',
          'value' => 103004,
        ),
      17 =>
        array(
          'code' => '5',
          'created_at' => '2019-12-24 21:42:31',
          'desc' => '设备类型',
          'id' => 18,
          'name' => '环保屋',
          'type' => 'sblx',
          'updated_at' => '2019-12-24 21:42:31',
          'value' => 103005,
        ),
      18 =>
        array(
          'code' => '3',
          'created_at' => '2019-12-23 19:40:28',
          'desc' => '设备型号',
          'id' => 19,
          'name' => 'C07-98',
          'type' => 'sbxh',
          'updated_at' => '2019-12-23 19:40:28',
          'value' => 104003,
        ),
      19 =>
        array(
          'code' => '2',
          'created_at' => '2019-12-23 19:40:06',
          'desc' => '设备型号',
          'id' => 20,
          'name' => 'B06554',
          'type' => 'sbxh',
          'updated_at' => '2019-12-23 19:40:06',
          'value' => 104002,
        ),
      20 =>
        array(
          'code' => '1',
          'created_at' => '2019-12-23 19:39:46',
          'desc' => '设备型号',
          'id' => 21,
          'name' => 'A0133B',
          'type' => 'sbxh',
          'updated_at' => '2019-12-23 19:39:46',
          'value' => 104001,
        ),
      21 =>
        array(
          'code' => '1',
          'created_at' => '2019-12-25 13:22:42',
          'desc' => '计量标准',
          'id' => 22,
          'name' => '次',
          'type' => 'jlbz',
          'updated_at' => '2019-12-25 13:22:42',
          'value' => 105002,
        ),
      22 =>
        array(
          'code' => '2',
          'created_at' => '2019-12-25 13:22:59',
          'desc' => '计量标准',
          'id' => 23,
          'name' => '千克',
          'type' => 'jlbz',
          'updated_at' => '2019-12-25 13:22:59',
          'value' => 105003,
        ),
      23 =>
        array(
          'code' => '1',
          'created_at' => '2020-01-08 15:42:33',
          'desc' => '垃圾类型',
          'id' => 24,
          'name' => '可回收物',
          'type' => 'ljlx',
          'updated_at' => '2020-01-08 15:42:33',
          'value' => 106001,
        ),
      24 =>
        array(
          'code' => '1',
          'created_at' => '2020-01-08 15:45:09',
          'desc' => '垃圾类型',
          'id' => 25,
          'name' => '餐厨垃圾',
          'type' => 'ljlx',
          'updated_at' => '2020-01-08 15:45:09',
          'value' => 106002,
        ),
      25 =>
        array(
          'code' => '1',
          'created_at' => '2020-01-08 15:45:32',
          'desc' => '垃圾类型',
          'id' => 26,
          'name' => '有害垃圾',
          'type' => 'ljlx',
          'updated_at' => '2020-01-08 15:45:32',
          'value' => 106003,
        ),
      26 =>
        array(
          'code' => '1',
          'created_at' => '2020-01-08 15:45:54',
          'desc' => '垃圾类型',
          'id' => 27,
          'name' => '其它垃圾',
          'type' => 'ljlx',
          'updated_at' => '2020-01-08 15:45:54',
          'value' => 106004,
        ),
      27 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:47:32',
          'desc' => '垃圾小类',
          'id' => 28,
          'name' => '废钢铁',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:47:32',
          'value' => 107001,
        ),
      28 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:48:04',
          'desc' => '垃圾小类',
          'id' => 29,
          'name' => '废金属',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:48:04',
          'value' => 107002,
        ),
      29 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:48:20',
          'desc' => '垃圾小类',
          'id' => 30,
          'name' => '废纸',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:48:20',
          'value' => 107003,
        ),
      30 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:48:46',
          'desc' => '垃圾小类',
          'id' => 31,
          'name' => '废塑料',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:48:46',
          'value' => 107004,
        ),
      31 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:49:18',
          'desc' => '垃圾小类',
          'id' => 32,
          'name' => '废旧电子产品',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:49:18',
          'value' => 107005,
        ),
      32 =>
        array(
          'code' => '106001',
          'created_at' => '2020-01-08 15:49:44',
          'desc' => '垃圾小类',
          'id' => 33,
          'name' => '其他',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:49:44',
          'value' => 107006,
        ),
      33 =>
        array(
          'code' => '106002',
          'created_at' => '2020-01-08 15:50:16',
          'desc' => '垃圾小类',
          'id' => 34,
          'name' => '餐厨垃圾',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:50:16',
          'value' => 107007,
        ),
      34 =>
        array(
          'code' => '106003',
          'created_at' => '2020-01-08 15:50:42',
          'desc' => '垃圾小类',
          'id' => 35,
          'name' => '有害垃圾',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:50:42',
          'value' => 107008,
        ),
      35 =>
        array(
          'code' => '106004',
          'created_at' => '2020-01-08 15:51:02',
          'desc' => '垃圾小类',
          'id' => 36,
          'name' => '其它垃圾',
          'type' => 'ljxl',
          'updated_at' => '2020-01-08 15:51:02',
          'value' => 107009,
        ),
    ));


  }
}
