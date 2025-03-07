<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class find_air extends Model
{
    use HasFactory;
    protected $table = 'find_air';
    public $timestamps = false;

    protected $fillable = ['space', 'building', 'service', 'phone', 'email'];

}
