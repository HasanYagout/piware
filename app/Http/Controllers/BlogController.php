<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Project;

class BlogController extends Controller
{

    public function index()
    {
        $posts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        $categories = BlogPost::published()
            ->select('category')
            ->distinct()
            ->whereNotNull('category')
            ->pluck('category');

        return view('blog.index', compact('posts', 'categories'));
    }
    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->published()
            ->firstOrFail();

        // Get related posts (same category)
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->where('category', $post->category)
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
    public function category($category)
    {
        $posts = BlogPost::published()
            ->where('category', $category)
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = BlogPost::published()
            ->select('category')
            ->distinct()
            ->whereNotNull('category')
            ->pluck('category');

        return view('blog.index', compact('posts', 'categories'));
    }
}
