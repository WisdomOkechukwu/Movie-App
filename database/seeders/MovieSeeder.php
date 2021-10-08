<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Movie;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();
        // Movie::create([
        //     'name' => 'THE FOREST',
        //     'price' => 320,
        //     'picture' => 'assets/images/uploads/mv-it5.jpg',
        //     'director' => 'Julian Kelly',
        //     'genre' => 'Adventure',
        //     'rating' => '8.7',
        //     'runtime' =>'2hr 13min',
        // ]);

        // Movie::create([
        //     'name' => 'IT',
        //     'price' => 500,
        //     'picture' => 'assets/images/uploads/mv-it7.jpg',
        //     'director' => 'Jackson Media',
        //     'genre' => 'SciFi',
        //     'rating' => '9.1',
        //     'runtime' =>'1hr 12min',
        // ]);
        // Movie::create([
        //     'name' => 'INCEPTION',
        //     'price' => 300,
        //     'picture' => 'assets/images/uploads/mv-it8.jpg',
        //     'director' => 'Luke Desprito',
        //     'genre' => 'Action',
        //     'rating' => '9,0',
        //     'runtime' =>'3hr 5min',
        // ]);

        $movie = Movie::find(2);
        $movie->picture = 'assets/images/uploads/mv-item4.jpg';
        $movie ->save();







       
    }
}
