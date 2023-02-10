<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource {
    public function toArray($request) {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'store_id' => $this->store_id,
            'active' => $this->active,
            'stock' => $this->stock,
            'data' => date_format($this->created_at, 'd/m/Y')
        ];
    }
}

