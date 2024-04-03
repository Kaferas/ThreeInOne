<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'description',
        'author',
        'categorie_id',
        'pictures_path',
        'is_published',
        'deleted_status'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'tag_posts', "post_id");
    }
}
