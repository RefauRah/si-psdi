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


        DB::table('absensi')->insert([
        	'id_siswa' =>'2',
        	'status_hadir'=>'1',
        	'pertemuanke' =>'1',
        	'created_at'=>$faker->date("Y-m-d H:i:s")
        ]);
    }
}
