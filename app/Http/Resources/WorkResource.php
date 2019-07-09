<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
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
        'service_id' => $this->service_id,
            
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'service' => $this->service,
            'styles' => $this->styles,

            'workdetials' => $this->workdetial,
        ];
    }
}
