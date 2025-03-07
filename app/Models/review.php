<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'review_product';
    public $timestamps = false;

    protected $fillable = ['user', 'product_id', 'rating', 'comment', 'verify'];
}
