<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class AuthorizationRolesSeeder_2
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationRolesSeeder_2 extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Default Roles ----------------------------------------------------------------
		//Apiato::call('Authorization@CreateRoleTask', ['admin', 'Administrator', 'Administrator Role', 999]);

		\DB::table('roles')->insert(array (
			0 =>
				array (
					'created_at' => '2019-12-13 13:36:58',
					'guard_name' => 'api',
					'id' => 1,
					'display_name' => '用户',
					'name' => 'yonghu',
					'description' => '说明',
					'level' => 999,
				),
			1 =>
				array (
					'created_at' => '2019-12-13 13:37:18',
					'guard_name' => 'api',
					'id' => 2,
					'display_name' => '巡检员',
					'name' => 'xunjian',
					'description' => '说明',
					'level' => 999,
				),
			2 =>
				array (
					'created_at' => '2019-12-13 13:37:32',
					'guard_name' => 'api',
					'id' => 3,
					'display_name' => '回收员',
					'name' => 'huishou',
					'description' => '说明',
					'level' => 999,
				),
			3 =>
				array (
					'created_at' => '2019-12-13 13:37:43',
					'guard_name' => 'api',
					'id' => 4,
					'name' => 'admin',
					'display_name' => '超级管理员',
					'description' => '说明',
					'level' => 999,
				),
		));

	}
}
