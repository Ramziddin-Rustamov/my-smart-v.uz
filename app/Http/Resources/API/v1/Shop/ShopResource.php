<?php

namespace App\Http\Resources\API\v1\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            'address' => $this->address,
            'opened_date' => $this->opened_date,
            'phone' => $this->phone,
            'image' => asset($this->image),
            'created_at' => $this->created_at,
            'user_id' => $this->user_id,
        ];
    }
}