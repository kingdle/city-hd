<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Dept;
use MercurySeries\Flashy\Flashy;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;

class TopnewsController extends Controller {
    public function index()
    {
        $posts = Post::latest('release_at')->paginate(6);
        $tags = Tag::pluck('name', 'id');

        return view('admin.topnews.index', compact('posts', 'tags'));
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        $tags = Tag::pluck('name', 'id');
        return view('admin.topnews.show', compact('posts', 'tags'));
    }

}
