<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'order_id' => $this->id,
            'user_name' => $this->user->name,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'product_name' => $this->product->name,
            'product_description' => $this->product->description,
            'product_category' => $this->product->categories->pluck('name'),
            'product_price' => $this->product->price,
        ];
    }
}
