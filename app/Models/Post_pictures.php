<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_pictures extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'pictures_path'
    ];
}
