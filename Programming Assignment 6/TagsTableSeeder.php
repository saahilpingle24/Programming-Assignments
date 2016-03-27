<?php

use Illuminate\Database\Seeder;
use App\Story;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();             
        $limit = 20;
        for($i = 0; $i < $limit; $i++) {
        	 DB::table('tags')->insert([
                'value' => $faker->word
            ]);            
        }        
        $stories = Story::get();
        foreach ($stories as $story){ 
            $numbers = range(1, 20);
            shuffle($numbers);
            $story->tags()->attach($numbers[0]);
            $story->tags()->attach($numbers[2]);
            $story->tags()->attach($numbers[4]);            
        }        
    }
}
