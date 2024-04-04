<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'country_id'    =>  $this->country_id,
            'country_code'  =>  $this->country_code,
            'fips_code'     =>  $this->fips_code,
            'iso2'          =>  $this->iso2,
            'type'          =>  $this->type,
            'latitude'      =>  $this->latitude,
            'longitude'     =>  $this->longtitude,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
            'flag'          =>  $this->flag,
            'wikiDataId'    =>  $this->wikiDataId
        ];
    }
}
