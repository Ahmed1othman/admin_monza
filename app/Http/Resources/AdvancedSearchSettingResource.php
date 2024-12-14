<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvancedSearchSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'brands'=>BrandResource::collection($this->brands),
            'types'=>TypeResource::collection($this->types),
            'colors'=>ColorResource::collection($this->colors),
            'companies'=>CompanyResource::collection($this->companies),
            'years'=>YearResource::collection($this->years),
            'prices'=>[
                'min' => 200,
                'max' => 50000
            ]
//            'models'=>ModelResource::collection($this->models),
        ];
    }
}
