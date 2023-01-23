<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = config('db');

        foreach($comics as $comic) {
            $new_comic = new Comic();
            $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
