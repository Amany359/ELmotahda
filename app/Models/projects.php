<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = false;

    protected $fillable = ['title_ar', "title_en", "desc_ar", 'desc_en', 'content_ar', 'content_en', 'images', 'status', 'seen'];

}