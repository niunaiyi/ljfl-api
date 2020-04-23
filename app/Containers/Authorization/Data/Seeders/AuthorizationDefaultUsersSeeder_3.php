<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class AuthorizationDefaultUsersSeeder_3
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationDefaultUsersSeeder_3 extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Default Users (with their roles) ---------------------------------------------
		\DB::table('users')->delete();

		// Default Users (with their roles) ---------------------------------------------
		Apiato::call('User@CreateUserByCredentialsTask', [
			'admin',
			'超级管理员',
			'18602005866',
			'123456',
			'2'])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

		\DB::table('users')->insert(array(
			1 =>
				array(
					'id' => 2,
					'username' => 'zhaoy',
					'password' => '$2y$10$1j5PYGTKPhqHtCaeeo2eEO2m6J6MkjQqWdL5cKdQlYlReC3CuMqnW',
					'realname' => '赵一',
					'phonenumber' => '18602000001',
					'address_id' => 4,
					'activated' => 1,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:10:45',
				),
			2 =>
				array(
					'id' => 3,
					'username' => 'qiane',
					'password' => '$2y$10$MuceqRpatU2P5mGczJbJxu1G/U9lqTA/Y5jOWoXe/0YNothT9tFcu',
					'realname' => '钱二',
					'phonenumber' => '18602000002',
					'address_id' => 4,
					'activated' => 1,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:15:39',
				),
			3 =>
				array(
					'id' => 4,
					'username' => 'suns',
					'password' => '$2y$10$Rxsm6AvTe.qrV193/IMIZOah7iD/05Y.BhKNuRFY7XLwFLJxqKZcm',
					'realname' => '孙三',
					'phonenumber' => '18602000003',
					'address_id' => 4,
					'activated' => 0,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:15:53',
				),
			4 =>
				array(
					'id' => 5,
					'username' => 'lis',
					'password' => '$2y$10$S3ePNNPgnC6x6fE1AZQl1uQTeEVOGmnSzdyN21coZ8knJqmSHpiQK',
					'realname' => '李四',
					'phonenumber' => '18602000004',
					'address_id' => 4,
					'activated' => 0,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:15:58',
				),
			5 =>
				array(
					'id' => 6,
					'username' => 'zhouw',
					'password' => '$2y$10$.TvZi8uVGQ.5YCvJGRYs1.p.gPpFGldR.a6LoeuYjHBBuwzbur/.e',
					'realname' => '周五',
					'phonenumber' => '18602000005',
					'address_id' => 4,
					'activated' => 0,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:16:07',
				),
			6 =>
				array(
					'id' => 7,
					'username' => 'wul',
					'password' => '$2y$10$sRLTRWJpcQXTBcIYVpcFJezv6QPC/e82Hti5yueCZYyesf5cXSGkK',
					'realname' => '吴六',
					'phonenumber' => '18602000006',
					'address_id' => 4,
					'activated' => 0,
					'remember_token' => NULL,
					'created_at' => '2019-11-26 16:36:20',
					'updated_at' => '2019-12-31 19:16:11',
				),
			7 =>
				array(
					'id' => 8,
					'username' => 'niuny',
					'password' => '$2y$10$lkt0wD/xiZEKDmkRJPSCmOqhm0q0CxIj/HB9wCftF/m5lpV6r6xbS',
					'realname' => '牛乃谊',
					'phonenumber' => '18620471701',
					'address_id' => 4,
					'activated' => 1,
					'remember_token' => NULL,
					'created_at' => '2019-12-15 01:00:05',
					'updated_at' => '2019-12-31 19:16:20',
				),
		));

	}
}
