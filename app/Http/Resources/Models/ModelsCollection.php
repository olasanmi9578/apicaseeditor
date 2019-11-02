<?php

namespace App\Http\Resources\Models;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ModelsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($models){
                return [
                    'id'            => $models->id,
                    'name'          => $models->name,
                    'base_path'     => $models->base_path,
                    'overlay_path'  => $models->overlay_path 
                ];
            })
        ];
    }
}
