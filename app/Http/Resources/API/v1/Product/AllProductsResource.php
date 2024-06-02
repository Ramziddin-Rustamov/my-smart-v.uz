<?php

namespace App\Http\Resources\API\v1\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class AllProductsResource extends JsonResource
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
            'body' => $this->body,
            'quantity' => $this->quantity,
            'image' => asset($this->image),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'shop_id' => $this->shop_id,
            'shop_name' => $this->shop->name,
            'shop_address' => $this->shop->address,
        ];
    }
}