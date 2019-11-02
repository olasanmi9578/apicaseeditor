<?php

namespace App\Http\Resources\Models;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Models\ModelsCollection;

class ModelsResource extends JsonResource
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
            'name' => $this->name,
            'base_path' => $this->base_path,
            'overlay_path' => $this->overlay_path,
            'mask_path' => $this->mask_path
        ];
    }
}
