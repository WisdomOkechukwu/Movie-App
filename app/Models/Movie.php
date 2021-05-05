<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable = [
        'name',
        'price',
        'picture',
        'director',
        'genre',
        'rating',
        'runtime',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class,'carts');
    }
}
