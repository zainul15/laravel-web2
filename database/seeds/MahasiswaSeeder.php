<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\factory::create(); //import library faker
		
		$limit = 5; //batasan banyak database
		
		for($i = 0; $i < $limit; $i++){
			DB::table('mahasiswa')->insert([	//mengisi data di database
				'nama' => $faker->name,
				'email' => $faker->unique()->email,	//email unique shg tdk ada yg sama
				'nohp' => $faker->phoneNumber,
				'alamat' => $faker->address,
			]);
		}
    }
}
