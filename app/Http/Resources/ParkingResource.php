<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


/**
 *
*/
class ParkingResource extends JsonResource
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
            'id'   => $this->id,
            'city' => $this->city,
            'address_parking' => $this->address_parking,
            'created_at' => $this->created_at
        ];
    }
}
