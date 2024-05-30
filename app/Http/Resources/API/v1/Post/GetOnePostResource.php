<?php

namespace App\Http\Resources\API\v1\Post;

use App\Http\Resources\API\v1\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GetOnePostResource extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body,
            'image' => asset($this->image),
            'created_at' => $this->created_at,
            'quarter_id' => $this->quarter_id,
            'quarter' => $this->quarter,
            'user_id' => $this->user_id,
            'author' => new UserResource($this->user),
        ];
    }
}