<?php
namespace App\Containers\Device\Data\Seeders;
use Illuminate\Database\Seeder;
class DevicesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('devices')->insert(array(
			0 =>
				array(
					'address_id' => 4,
					'created_at' => '2019-12-23 20:08:01',
					'id' => 1,
					'name' => '测试',
					'position' => '{"lat": 31.857052287354687, "lng": 117.158487767758}',
					'sblx_value' => 103001,
					'sbxh_value' => 104001,
					'updated_at' => '2019-12-24 15:38:39',
					'user_id' => 4,
				),
			1 =>
				array(
					'address_id' => 6,
					'created_at' => '2019-12-24 14:00:34',
					'id' => 2,
					'name' => '测试2',
					'position' => NULL,
					'sblx_value' => 103002,
					'sbxh_value' => 104002,
					'updated_at' => '2019-12-24 15:07:34',
					'user_id' => 8,
				),
			2 =>
				array(
					'address_id' => 50612,
					'created_at' => '2019-12-24 14:51:13',
					'id' => 3,
					'name' => '测试3',
					'position' => '{"lat": 31.23660318117849, "lng": 121.5084423692753}',
					'sblx_value' => 103004,
					'sbxh_value' => 104001,
					'updated_at' => '2019-12-24 16:03:05',
					'user_id' => 8,
				),
			3 =>
				array(
					'address_id' => 29627,
					'created_at' => '2019-12-24 14:52:42',
					'id' => 5,
					'name' => '测试255',
					'position' => '{"lat": 31.85809506879886, "lng": 117.1695908238614}',
					'sblx_value' => 103004,
					'sbxh_value' => 104002,
					'updated_at' => '2019-12-24 16:27:06',
					'user_id' => 8,
				),
		));
	}
}
