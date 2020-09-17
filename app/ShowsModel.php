<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowsModel extends Model
{
    protected $table = 'shows';
    protected $primaryKey = 'show_id';

    protected $fillable = [
        'show_id',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
        'movie_id',
        'studio_id'
    ];

    public function movie()
    {
        return $this->belongsTo('App\MoviesModel');
    }

    public function studio()
    {
        return $this->belongsTo('App\StudiosModel');
    }
}
