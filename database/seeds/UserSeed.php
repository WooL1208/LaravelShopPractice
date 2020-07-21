<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
// use Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
    	$type = ["G","A"];
        $faker = Faker::create("zh-TW");

        User::create([
        	'user_account' => '123456',
        	'user_pw' => Hash::make('123456'),
        	'user_name' => '123456',
        	'user_email' => '123456@gmail.com',
        	'user_type' => 'A',
        	'created_at' => $faker->dateTime(),
        	'updated_at' => $faker->dateTime()
        ]);
        User::create([
        	'user_account' => '654321',
        	'user_pw' => Hash::make('654321'),
        	'user_name' => '654321',
        	'user_email' => '654321@gmail.com',
        	'user_type' => 'G',
        	'created_at' => $faker->dateTime(),
        	'updated_at' => $faker->dateTime(),
        ]);
        //faker
        for ($i = 1; $i <101 ; $i++) { 
        	User::create([
        	'user_account' => $faker->userName,
        	'user_pw' => Hash::make($faker->password),
        	'user_name' => $faker->name,
        	'user_email' => $faker->email,
        	'user_type' => $type[rand(0,1)],
        	'created_at' => $faker->dateTime(),
        	'updated_at' => $faker->dateTime(),
        	]);
        }

    }
}
