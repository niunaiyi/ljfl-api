<?php

namespace App\Containers\Customer\Data\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('customers')->delete();

		\DB::table('customers')->insert(array(
			0 =>
				array(
					'id' => 1,
					'nickname' => 'warl0ck',
					'realname' => '牛乃谊',
					'openid' => '343434',
					'phonenumber' => '18602005866',
					'score' => 0,
					'created_at' => '2020-03-31 19:25:21',
					'updated_at' => '2020-03-31 19:25:21',
				),
			1 =>
				array(
					'id' => 2,
					'nickname' => 'hibomb',
					'realname' => '刘亚林',
					'openid' => '3343',
					'phonenumber' => '18991547709',
					'score' => 0,
					'created_at' => '2020-03-31 19:25:43',
					'updated_at' => '2020-03-31 19:25:43',
				),
		));
	}
}