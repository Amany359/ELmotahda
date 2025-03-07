<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class privacy_policy extends Model
{
    use HasFactory;
    protected $table = 'privacy_policy';
    public $timestamps = false;

    protected $fillable = ['text_ar', 'text_en', 'desc_ar', 'desc_en', 'created_at'];

}
