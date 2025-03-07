<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


    protected $table = 'admins';

    
    protected $fillable = [
        'username',
        'email',
        'password',
        'token_base',
        'status',
        'device_name',
        'device_type',
        'cookies',
        'auto_location',
        'ip_device',
        'permation',
        'created_at',
        'updated_at'
    ];
}
