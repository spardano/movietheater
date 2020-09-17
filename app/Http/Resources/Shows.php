<?php

namespace App\Http\Resources;

use App\ShowsModel;
use Illuminate\Http\Resources\Json\JsonResource;

class Shows extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //setting data yang dapat diakses melalui request API
        return [
            'show_id' => $this->show_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'movie' => url('/api/movie/' . $this->movie_id . '/'),
            'studio' => url('/api/studio/' . $this->studio_id . '/')
        ];
    }



    public function with($request)
    {
        return [
            'author_url' => url('http://spardano.github.io')
        ];
    }
}
