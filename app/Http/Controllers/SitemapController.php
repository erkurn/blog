<?php

namespace App\Http\Controllers;

use Canvas\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Sitemap Index
     *
     * @return Response
     */
    public function index()
    {
        $post = Post::published()->orderByDesc('published_at')->first();

        return response()->view('sitemap.index', [
            'post'  =>  $post
        ])->header('Content-Type', 'text/xml');
    }


    /**
     * Sitemap Posts
     *
     * @return Response
     */
    public function posts()
    {
        $posts = Post::published()->orderByDesc('published_at')->get();
        return response()->view('sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}
