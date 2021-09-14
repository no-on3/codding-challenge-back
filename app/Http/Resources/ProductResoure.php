<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResoure extends JsonResource
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
            'price' => $this->price,
            'description' => $this->description,
            'available' => $this->available,
            'category' => new CategoryResoure($this->category),
            'created_at_formatted' => $this->created_at->diffForHumans(),
            'created_at' => $this->created_at,
            'updated_at_formatted' => $this->updated_at->diffForHumans(),
            'updated_at' => $this->created_at,
        ];
    }
}
