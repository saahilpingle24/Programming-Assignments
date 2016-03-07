<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Collection;

class LikeTableSeeder extends Seeder
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
        $collections = Collection::lists('id')->all();
        $limit = 10;
        for($i = 0; $i < $limit; $i++) {
        	DB::table('like')->insert([
        		'user_id' => $faker->randomElement($users),
        		'collection_id' => $faker->randomElement($collections)        		
        	]);
        }
    }
}
