<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create('id_ID');

         for ($x = 1; $x <= 30; $x++){

            DB::table('absensi')->insert([
            	'id_siswa' =>$faker->numberBetween(1,20),
            	'status_hadir'=>$faker->numberBetween(0,1),
            	'pertemuanke' =>$faker->numberBetween(1,30),
            	'created_at'=>$faker->date("Y-m-d H:i:s"),         
            ]);
        }
    }
}
