<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class PagesController extends Controller
{
    public function front()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);
        $lastpost = WinkPost::with('tags')->live()->orderBy('publish_date', 'DESC')->simplePaginate(1);
        $heroposts = WinkPost::with('tags')->live()->orderBy('publish_date', 'DESC')->simplePaginate(4)->skip(1);
        $tag = WinkTag::with('posts')->get();

        return view('pages.front', [
            'posts' => $posts,
            'lastpost' => $lastpost,
            'heroposts' => $heroposts,
            'tags' => $tag,
        ]);
    }
}
