<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'slug_url',
        'cat_meta_title',
        'cat_meta_desc',
        'cat_meta_key',
        'display',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
