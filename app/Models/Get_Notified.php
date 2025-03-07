<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Get_Notified extends Model
{
    use HasFactory;

    protected $table = 'get_notified';
    public $timestamps = false;

    protected $fillable = ['from2', 'email'];

}
