<?php
namespace App\Containers\Station\Data\Seeders;
use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('stations')->delete();

        \DB::table('stations')->insert(array (
            0 =>
            array (
                'address_id' => 2,
                'created_at' => '2020-01-10 15:17:44',
                'id' => 1,
                'name' => '第一回收站',
                'position' => '{"lat": 31.739747428744437, "lng": 117.35111044321006}',
                'updated_at' => '2020-01-10 15:18:10',
                'user_id' => 4,
            ),
        ));


    }
}
