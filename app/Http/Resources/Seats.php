<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Seats extends JsonResource
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
            'seat_id' => $this->seat_id,
            'seat_row' => $this->seat_row,
            'seat_number' => $this->seat_number,
            'studio_id' => url('/api/studio/' . $this->studio_id . '/')
        ];
    }
}
