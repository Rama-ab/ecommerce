<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',     
        'image',
        'deleted_at'
      
      
     ];

     public function categories(){
        return $this->belongsToMany(Category::class,'category_product' , 'product_id' , 'category_id');
     }

     public function orders(){
      return $this->hasMany(Order::class);
   }

}
