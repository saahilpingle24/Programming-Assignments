<?php

use Illuminate\Database\Seeder;
use App\Location;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $locations = Location::lists('id')->all();        
        $limit = 3;
        foreach($locations as $location) {
            for($i = 0; $i < $limit; $i++) {
        	   DB::table('stories')->insert([
                   'location_id' => $location,
                   'title' => $faker->sentence,
                   'story' => $faker->text,
                   'published' => $faker->boolean
        	   ]);
            }
        }        
    }
}
