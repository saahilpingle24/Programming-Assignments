<?php

use Illuminate\Database\Seeder;
use App\User;

class FollowTableSeeder extends Seeder
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
        	DB::table('follow')->insert([
        		'follower_id' => $faker->randomElement($users),
        		'follows_id' => $faker->randomElement($users)        		
        	]);
        }
    }
}
