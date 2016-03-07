<?php

use Illuminate\Database\Seeder;
use App\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = User::lists('id')->all();
        $limit = 10;
        for($i = 0; $i < $limit; $i++) {
        	DB::table('profiles')->insert([
        		'user_id' => $faker->unique()->randomElement($users),
        		'username' => $faker->unique()->userName        		
        	]);
        }
    }
}
