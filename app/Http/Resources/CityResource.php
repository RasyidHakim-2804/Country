<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'               =>     $this->id,
            'name'             =>     $this->name,
            'state_id'         =>     $this->state_id,
            'state_code'       =>     $this->state_code,
            'country_id'       =>     $this->country_id,
            'country_code'     =>     $this->country_code,
            'latitude'         =>     $this->latitude,
            'longitude'        =>     $this->longitude,
            'created_at'       =>     $this->created_at,
            'updated_at'       =>     $this->updated_at,
            'flag'             =>     $this->flag,
            'wikiDataId'       =>     $this->wikiDataId
        ];
    }
}