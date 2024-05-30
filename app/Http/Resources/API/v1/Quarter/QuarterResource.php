<?php

namespace App\Http\Resources\API\v1\Quarter;

use Illuminate\Http\Resources\Json\JsonResource;

class QuarterResource extends JsonResource
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
            'district_id' => $this->district_id,
            'district' => $this->district,
        ];
    }
}
