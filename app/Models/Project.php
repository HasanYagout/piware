<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

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
