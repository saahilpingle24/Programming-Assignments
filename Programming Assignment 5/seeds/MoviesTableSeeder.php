<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for($i = 0; $i < $limit; $i++) {
        	DB::table('movies')->insert([
        		'imdbId' => $faker->unique()->word,
        		'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        		'year'	=> $faker->year($max = 'now'),
        		'rated'	=> $faker->randomLetter,
        		'released'	=> $faker->dateTimeThisCentury($max = 'now'),
        		'runtime'	=> $faker->sentence($nbWords = 2, $variableNbWords = true),
        		'director'	=> $faker->name,
        		'actors'	=> $faker->words($nb = 3, $asText = true), 
        		'plot'		=> $faker->text($maxNbChars = 200), 
        		'poster'	=> $faker->url,
        		'imdbRating'	=> $faker->randomFloat($nbMaxDecimals = 1, $min = 1.0, $max = 9.9)
        	]);
        }
    }
}
