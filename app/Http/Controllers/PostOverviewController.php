<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostOverviewController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('user')->simplePaginate(15);

        return PostResource::collection($posts);
    }
}
