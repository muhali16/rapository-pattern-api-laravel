<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
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
            'loan_date' => $this->loan_dt,
            'return_date' => $this->return_dt,
            'borrower' => new UserResource($this->whenLoaded('user')),
            'book' => new BookResource($this->whenLoaded('book')),
            $this->mergeWhen($request->routeIs('loans.show'), function () {
                return [
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at
                ];
            })
        ];
    }
}
