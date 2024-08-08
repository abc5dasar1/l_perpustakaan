<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'stock',
        'publisher',
        'year_published',
        'author'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
