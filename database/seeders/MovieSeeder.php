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
        Movie::create([
            'name' => 'INTO THE WILD',
            'price' => 55,
            'picture' => 'assets/images/uploads/mv2.jpg',
            'director' => 'Damian Smith',
            'genre' => 'Adventure',
            'rating' => '8.5',
            'runtime' =>'3hr 3min',
        ]);

        Movie::create([
            'name' => 'THE WALK',
            'price' => 122,
            'picture' => 'assets/images/uploads/mv2.jpg',
            'director' => 'Damian Smith',
            'genre' => 'Adventure',
            'rating' => '9.0',
            'runtime' =>'2hr 3min',
        ]);

        Movie::create([
            'name' => 'BLADE RUNNER',
            'price' => 45,
            'picture' => 'assets/images/uploads/mv3.jpg',
            'director' => 'Herold Fuller',
            'genre' => 'Action',
            'rating' => '6.8',
            'runtime' =>'1hr 45min',
        ]);
        Movie::create([
            'name' => 'MULHOLLAND PRIDE',
            'price' => 200,
            'picture' => 'assets/images/uploads/mv4.jpg',
            'director' => 'Ashley Damon',
            'genre' => 'Adventure',
            'rating' => '7.0',
            'runtime' =>'2hr 15min',
        ]);
        Movie::create([
            'name' => 'SKYFALL: EVIL OF BOSS',
            'price' => 50,
            'picture' => 'assets/images/uploads/mv5.jpg',
            'director' => 'Lashley Epinos',
            'genre' => 'Action',
            'rating' => '6.9',
            'runtime' =>'2hr 5min',
        ]);
        Movie::create([
            'name' => 'INTERSTELLAR',
            'price' => 500,
            'picture' => 'assets/images/uploads/mv-item1.jpg',
            'director' => 'Norlan Dynamos',
            'genre' => 'SciFi',
            'rating' => '7.5',
            'runtime' =>'1hr 35min',
        ]);
        Movie::create([
            'name' => 'THE REVENANT',
            'price' => 205,
            'picture' => 'assets/images/uploads/mv-item2.jpg',
            'director' => 'Legend Brothers',
            'genre' => 'Adventure',
            'rating' => '8.4',
            'runtime' =>'3hr 15min',
        ]);
        Movie::create([
            'name' => 'OBLIVION',
            'price' => 55,
            'picture' => 'assets/images/uploads/mv-it1.jpg',
            'director' => 'Willow Smith',
            'genre' => 'Action',
            'rating' => '8.3',
            'runtime' =>'1hr 45min',
        ]);
        Movie::create([
            'name' => 'DIE HARD',
            'price' => 500,
            'picture' => 'assets/images/uploads/mv-item3.jpg',
            'director' => 'Kulher Demitri',
            'genre' => 'SciFi',
            'rating' => '9,0',
            'runtime' =>'3hr 5min',
        ]);
    }
}
