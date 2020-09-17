<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Payments extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'payment_id' => $this->payment_id,
            'payment_date' => $this->payment_date,
            'qty' => $this->qty,
            'ticket_number' => url('/api/ticket/' . $this->ticket_number),
            'costumer_id' => url('/api/costumer/' . $this->costumer_id),
            'staff_id' => url('/api/staff/' . $this->staff_id)
        ];
    }
}
