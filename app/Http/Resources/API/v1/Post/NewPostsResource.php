<?php

namespace App\Http\Resources\API\v1\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class NewPostsResource extends JsonResource
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
            'image' => asset($this->image),
            'created_at' => $this->created_at,
            'quarter_id' => $this->quarter_id,
            'quarter-name' => $this->quarter->name,
            'user_id' => $this->user_id,
            'author' => $this->user->first_name . '  ' . $this->user->last_name,
            'user_image' => asset($this->user->image)
        ];
    }
}