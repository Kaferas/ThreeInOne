<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_post extends Model
{
    use HasFactory;

    protected $table = "tag_posts";

    protected $fillable = [
        'tags_id',
        'post_id'
    ];
}
