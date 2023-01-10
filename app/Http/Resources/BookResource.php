<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'publish_year' => $this->publish_year,
            'borrower' => new UserCollection($this->whenLoaded('user')),
            $this->mergeWhen($request->routeIs('books.show'),
                function () {
                return ['created_at' => $this->created_at,
                    'updated_at' => $this->updated_at];
            })
        ];
    }
}
