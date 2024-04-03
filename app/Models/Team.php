<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prenom',
        'current_post',
        'eamil_adress',
        'phone_number',
        'picture_path'
    ];
}
