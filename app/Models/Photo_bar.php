<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_bar extends Model
{
    use HasFactory;

    protected $table = 'photo_bar';

    protected $fillable = ['image', "background", 'admin', 'created_at', 'updated_at'];


}
