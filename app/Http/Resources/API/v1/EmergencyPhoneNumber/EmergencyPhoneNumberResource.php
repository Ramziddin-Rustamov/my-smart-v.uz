<?php

namespace App\Http\Resources\API\v1\EmergencyPhoneNumber;

use Illuminate\Http\Resources\Json\JsonResource;

class EmergencyPhoneNumberResource extends JsonResource
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
            'fio' => $this->fio,
            'role' => $this->role,
            'quarter_id' => $this->quarter_id,
            'phone_number' => $this->phone_number,
            'created_at' => $this->created_at,
        ];
    }
}