<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product__tags extends Model
{
    use HasFactory;
     
    protected $table = 'product__tags';
    public $timestamps = false;

    protected $fillable = ['tag_id', 'product_id'];
}
