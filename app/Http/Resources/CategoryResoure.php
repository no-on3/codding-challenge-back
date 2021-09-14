<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResoure extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at_formatted' => $this->created_at->diffForHumans(),
            'created_at' => $this->created_at,
            'updated_at_formatted' => $this->updated_at->diffForHumans(),
            'updated_at' => $this->created_at,
        ];
    }
}
