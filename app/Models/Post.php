<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'bg-card', 'hero-img', 'img', 'category', 'desc1', 'desc2', 'desc3', 'desc4'];
}
