<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engineering extends Model
{
    use HasFactory;

    protected $table = 'engineering';
    public $timestamps = false;

    protected $fillable = ['company', 'email', 'location', 'message', 'project', 'phone', 'file'];

}
