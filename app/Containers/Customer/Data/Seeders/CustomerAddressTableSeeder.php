<?php

namespace App\Containers\Customer\Data\Seeders;

use Illuminate\Database\Seeder;

class CustomerAddressTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('customer_address')->delete();

		\DB::table('customer_address')->insert(array(
			0 =>
				array(
					'address_id' => 2,
					'created_at' => '2020-03-31 13:55:08',
					'customer_id' => 1,
					'id' => 1,
					'updated_at' => '2020-03-31 13:55:08',
				),
			1 =>
				array(
					'address_id' => 3,
					'created_at' => '2020-03-31 13:55:20',
					'customer_id' => 2,
					'id' => 2,
					'updated_at' => '2020-03-31 13:55:20',
				),
			2 =>
				array(
					'address_id' => 455,
					'created_at' => '2020-03-31 13:55:26',
					'customer_id' => 1,
					'id' => 3,
					'updated_at' => '2020-03-31 13:55:26',
				),
			3 =>
				array(
					'address_id' => 3333,
					'created_at' => '2020-03-31 13:55:32',
					'customer_id' => 2,
					'id' => 4,
					'updated_at' => '2020-03-31 13:55:32',
				),
		));


	}
}