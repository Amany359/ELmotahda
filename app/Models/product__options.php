<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product__options extends Model
{
    use HasFactory;

    protected $table = 'product__options';
    public $timestamps = false;

    protected $fillable = ['count_product_option', 'product_id', 'option_id', 'value'];

}
