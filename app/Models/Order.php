<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'product_id',
      'status'
     ];

     public function product(){
        return $this->belongsTo(Product::class)->withTrashed();
     }

     public function user(){
      return $this->belongsTo(User::class);
  }
}
