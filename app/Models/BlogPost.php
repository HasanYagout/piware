<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class BlogPost extends Model
{
    use HasTranslations;
    protected $translatable = ['title','excerpt','content','sections','category'];
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'sections',
        'tags',
        'tech_stack',
        'featured_image',
        'category',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
        'sections' => 'array',
        'tags' => 'array',
        'tech_stack' => 'array',
    ];

// Scope for published posts
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '<=', now());
    }


    // Get the URL for the blog post
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Get reading time in minutes
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 200);
        return $minutes . ' min read';
    }

    // Get formatted published date
    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('F j, Y') : 'Draft';
    }

    // Auto-generate slug from title
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
