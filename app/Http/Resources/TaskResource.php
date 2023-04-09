<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = "task";

    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'excerpt' => $this->resource->excerpt,
            'body' => $this->resource->body,
            'slug' => $this->resource->slug,
            'user' => new UserResource($this->resource->user),  // povezani Resursi
        ];
    }
}