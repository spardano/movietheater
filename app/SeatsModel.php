<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatsModel extends Model
{
    protected $table = 'seats';
    protected $primaryKey = 'seat_id';
    protected $fillable = [
        'seat_id',
        'seat_row',
        'seat_number',
        'studio_id'
    ];

    //relation
    public function studio()
    {
        return $this->belongsTo('App\StudiosModel');
    }
}
