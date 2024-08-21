<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'bg-card', 'hero-img', 'img', 'category_id', 'desc1', 'desc2', 'desc3', 'desc4'];
    protected $with = ['category'];


    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
