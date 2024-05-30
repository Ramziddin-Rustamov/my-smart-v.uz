<?php

namespace App\Http\Resources\API\v1\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'current_page' => $this->currentPage(),
            'data' => $this->map(function ($post) {
                return [
                    'id' => $post->id,
                    'quarter_id' => $post->quarter_id,
                    'title' => $post->title,
                    'image' => asset($post->image),
                ];
            }),
            'first_page_url' => $this->url(1),
            'from' => $this->firstItem(),
            'last_page' => $this->lastPage(),
            'last_page_url' => $this->url($this->lastPage()),
            'links' => [
                [
                    'url' => null,
                    'label' => "&laquo; Oldingi",
                    'active' => false
                ],
                [
                    'url' => $this->url(1),
                    'label' => "1",
                    'active' => true
                ],
                [
                    'url' => null,
                    'label' => "Keyingi &raquo;",
                    'active' => false
                ]
            ],
            'next_page_url' => $this->nextPageUrl(),
            'path' => $this->path(),
            'per_page' => $this->perPage(),
            'prev_page_url' => $this->previousPageUrl(),
            'to' => $this->lastItem(),
            'total' => $this->total(),
        ];
    }
}
