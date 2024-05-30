<?php

namespace App\Http\Resources\API\v1\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'quarter_id' => $this->quarter_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'father_name' => $this->father_name,
            'email' => $this->email,
            'provider_id' => $this->provider_id,
            'image' => asset($this->image),
            'email_verified_at' => $this->email_verified_at,
            // 'is_admin' => $this->is_admin,
            'active_status' => $this->active_status,
            'created_at' => $this->created_at,
            'profile' => $this->profiles,
        ];
    }
}