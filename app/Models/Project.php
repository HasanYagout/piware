<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $translatable = ['title','description'];

    public function scopePublished($query)
    {
        return $query->where('is_published', 1);
    }

    protected $fillable = [
        'title', 'slug', 'description', 'image', 'technologies', 'url', 'is_published', 'type', 'images'
    ];

    protected $casts = [
        'technologies' => 'array',
        'images' => 'array',   // important for JSON column
    ];
}
