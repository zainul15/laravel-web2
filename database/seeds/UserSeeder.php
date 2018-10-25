<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
			DB::table('user')->insert([	//mengisi data di database
				'nama' => $faker->name,
				'email' => $faker->unique()->email,	//email unique shg tdk ada yg sama
				'username' => $faker->username,
				'password' => $faker->password,
			]);
		}
    }
}
