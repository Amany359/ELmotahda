<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = ['product_name', "shipping", "product_price", 'desc_ar', 'desc_en', 'images', 'discount', 'vat'];

}
