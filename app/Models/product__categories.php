<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product__categories extends Model
{
    use HasFactory;

    
    protected $table = 'product__categories';
    public $timestamps = false;

    protected $fillable = ['product_id', 'category_id'];

}
