<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class StoreResource extends JsonResource {
    /**
     * Transform the resource into an array.
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
    */
    public function toArray($request) {
        //return parent::toArray($request);
        $products = $this->whenLoaded('products');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'products' => new ProductResource($this->products)

        ];
    }
}
