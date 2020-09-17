<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Studios extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'studio_id' => $this->studio_id,
            'studio_name' => $this->studio_name
        ];
    }
}
