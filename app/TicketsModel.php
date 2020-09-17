<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketsModel extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'ticket_number';

    //relasi
    public function show()
    {
        return $this->belongsTo('App\ShowsModel');
    }

    public function ticket()
    {
        return $this->belongsTo('App\TicketsTypesModel', 'ticket_type', 'ticket_type_id');
    }
}
