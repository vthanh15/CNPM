<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'category_id',
        'title',
        'sort_content',
        'slug',
        'description',
        'image',
        'status',
        'created_by'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
