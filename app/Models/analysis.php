<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analysis extends Model
{
    use HasFactory;
    protected $table = 'analysis';
    public $timestamps = false;

    protected $fillable = ['page', 'ip_device'];

}
