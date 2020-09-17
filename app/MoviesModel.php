<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoviesModel extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'movie_id';
}
