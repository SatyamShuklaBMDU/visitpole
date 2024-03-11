<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'category_id',
        'short_content',
        'editor1',
        'author_name',
        'image',
        'image1',
        'date',
        'status',
        'slug_url',
        'm_title',
        'm_desc',
        'm_key',
    ];

    public function businesses()
    {
        return $this->hasMany(BusinessPost::class);
    }
}
