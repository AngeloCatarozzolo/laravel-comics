<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //legge i dati dal config
        $movies = config('db');
        //crea i film
        foreach( $movies as $movie){
            $new_movie = new Movie();
            $new_movie->title = $movie['title'];
            $new_movie->image = $movie['thumb'];
            $new_movie->price = $movie['price'];
            $new_movie->series = $movie['series'];
            $new_movie->sale_date = $movie['sale_date'];
            $new_movie->type = $movie['type'];
            $new_movie->save();
        }
    }
}
