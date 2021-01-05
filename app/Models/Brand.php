<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'createdBy',
        'name',
        'image',
        'isDeleted',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'createdBy');
    }
    
    public function product()
    {
      return $this->hasMany(Product::class);
    } 


}

 
