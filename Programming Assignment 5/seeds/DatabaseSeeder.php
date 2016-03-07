<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        // $this->call(MovieGenreTableSeeder::class);
        // $this->call(FollowTableSeeder::class);        
        // $this->call(CollectionMovieTableSeeder::class);        
        // $this->call(LikeTableSeeder::class);
    }
}
