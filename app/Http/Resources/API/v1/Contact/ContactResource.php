<?php

namespace App\Http\Resources\API\v1\Contact;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'quarter_id' => $this->quarter_id,
            'reason' => $this->reason,
            'message' => $this->message,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
        ];
    }
}