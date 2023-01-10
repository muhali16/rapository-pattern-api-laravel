<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
//            'borrow' => ($this->mergeWhen())->whenLoaded('loan'),
            $this->mergeWhen($request->routeIs('users.show'), function () {
                    return [
                        'email_verified_at' => $this->email_verified_at,
                        'remember_token' => $this->remember_token,
                        ];
                    }),
            $this->mergeWhen($request->routeIs('users.show'), function () {
                    return [
                        'created_at' => $this->created_at,
                        'updated_at' => $this->updated_at
                        ];
                    })
        ];
    }
}
