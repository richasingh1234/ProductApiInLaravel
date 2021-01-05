<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'price',
        'mrp_price',
        'image',
        'brand_id',
        'isDeleted',

    ];


    public function brand()
    {
      return $this->belongsTo(Brand::class);
    } 


}
