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
        $movie->picture = 'mv-item4.jpg';
        $movie ->save();

        Movie::create([
            'name' => 'BLUE VELVET',
            'price' => 95,
            'picture' => 'assets/images/uploads/mv-item6.jpg',
            'director' => 'Desmond Young',
            'genre' => 'Adventure',
            'rating' => '8.1',
            'runtime' =>'1hr 13min',
        ]);
        Movie::create([
            'name' => 'GRAVITY',
            'price' => 700,
            'picture' => 'assets/images/uploads/mv-item7.jpg',
            'director' => 'The Ruso Brothers',
            'genre' => 'SciFi',
            'rating' => '9.8',
            'runtime' =>'2hr 45min',
        ]);
        Movie::create([
            'name' => 'SOUTHPAW',
            'price' => 950,
            'picture' => 'assets/images/uploads/mv-item8.jpg',
            'director' => 'Helder Postiga',
            'genre' => 'Action',
            'rating' => '9.7',
            'runtime' =>'3hr 30min',
        ]);

        Movie::create([
            'name' => 'SPECTRE',
            'price' => 900,
            'picture' => 'assets/images/uploads/mv-item10.jpg',
            'director' => 'Helder Postiga',
            'genre' => 'Action',
            'rating' => '9.5',
            'runtime' =>'3hr 5min',
        ]);

        Movie::create([
            'name' => 'THE STRANGER THINGS',
            'price' => 500,
            'picture' => 'assets/images/uploads/mv-item11.jpg',
            'director' => 'The Ruso Brothers',
            'genre' => 'SciFi',
            'rating' => '9.3',
            'runtime' =>'3hr 5min',
        ]);

        Movie::create([
            'name' => 'LA LA LAND',
            'price' => 250,
            'picture' => 'assets/images/uploads/mv-item12.jpg',
            'director' => 'Leonard James',
            'genre' => 'Adventure',
            'rating' => '8.4',
            'runtime' =>'2hr 13min',
        ]);





       
    }
}
