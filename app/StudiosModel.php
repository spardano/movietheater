<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudiosModel extends Model
{
    protected $table = 'studios';
    protected $primaryKey = 'studio_id';
    protected $fillable = ['studio_id', 'studio_name'];
}
