<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movies extends JsonResource
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
            'movie_id' => $this->movie_id,
            'movie_title' => $this->movie_title,
            'genre' => $this->genre,
            'length' => $this->length,
            'year' => $this->year,
            'stars' => $this->stars,
            'directors' => $this->directors,
            'synopsis' => $this->synopsis
        ];
    }

    public function with($request)
    {
        return [
            'author_url' => url('http://spardano.github.io')
        ];
    }
}
