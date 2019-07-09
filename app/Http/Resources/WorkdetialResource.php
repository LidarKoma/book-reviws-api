<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkdetialResource extends JsonResource
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
            
            'book_id' => $this->work_id,
            'image1' => $this->image1,
            'image2' => $this->image2,
            'image2' => $this->image2,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'work' => $this->work,

          ];
    }
}
