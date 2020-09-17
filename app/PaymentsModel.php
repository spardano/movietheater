<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentsModel extends Model
{
    protected $table = "payments";
    protected $primaryKey = "payment_id";

    public function ticket()
    {
        return $this->belongsTo('App\TicketsModel', 'ticket_number', 'ticket_number');
    }

    public function costumer()
    {
        return $this->belongsTo('App\CostumerModel');
    }

    public function staff()
    {
        return $this->belongsTo('App\StaffModel');
    }
}
