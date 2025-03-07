<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'order_quantity',
        'product_name',
        'product_price',
        'product_image',
        'product_discount',
        'process',
        'user',
        'area',
        'token',
        'name',
        'address1',
        'address2',
        'notif',
        'country',
        'email2',
        'payment',
        'phone',
        'shipping',
        'order_token',
        'screen_shot',
        'town',
    ];

}
