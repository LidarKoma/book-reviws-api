<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StyleResource extends JsonResource
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
            'id' => $this->id,

            'work_id' => $this->work_id,

                'name' => $this->name,
                'image' => $this->image,
                'created_at' => (string) $this->created_at,
                'updated_at' => (string) $this->updated_at,
               
                'work' => $this->work,
    
    
            ];    }
}
