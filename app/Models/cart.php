<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    
    protected $table = 'cart';
    public $timestamps = false;

    protected $fillable = ['id_cart', 'product_id', 'cart_quantity', 'user', 'color', 'size'];

}
