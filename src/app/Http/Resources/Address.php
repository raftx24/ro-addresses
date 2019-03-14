<?php

namespace LaravelEnso\RoAddresses\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Address extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'country'       => $this->whenLoaded('country', $this->country->name),
            'countyName'   => $this->whenLoaded('county', $this->county->name),
            'localityName' => $this->whenLoaded('locality', $this->locality->name),
            'neighbourhood' => $this->neighbourhood,
            'streetType'    => $this->street_type,
            'street'        => $this->street,
            'number'        => $this->number,
            'building'      => $this->building,
            'entry'         => $this->entry,
            'floor'         => $this->floor,
            'apartment'     => $this->apartment,
            'buildingType'  => $this->building_type,
            'postalArea'    => $this->postal_area,
            'obs'           => $this->obs,
            'isDefault'     => $this->is_default,
        ];
    }
}
