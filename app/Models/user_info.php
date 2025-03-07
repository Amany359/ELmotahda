<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;

    protected $table = 'info_users';
    public $timestamps = false;

    protected $fillable = ['user', 'street', 'apartment', 'city', 'area', "country", "image"];
}
