<?php
namespace App\Http\Resources\API\v1\ClientView;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientViewApiResource extends JsonResource
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
            'clientView' => $this->clientView, // Adjust this according to your model's attributes
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}