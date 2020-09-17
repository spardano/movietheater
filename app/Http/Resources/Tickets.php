<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tickets extends JsonResource
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
            'ticket_numer' => $this->ticket_number,
            'show_id' => url("/api/show/" . $this->show_id),
            'seat' => url("/api/seat/" . $this->seat)
        ];
    }
}
