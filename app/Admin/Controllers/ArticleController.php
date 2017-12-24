<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Tag;
use Encore\Admin\Controllers\ModelForm;
use MercurySeries\Flashy\Flashy;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class ArticleController extends Controller
{
    use ModelForm;

    public function index()
    {

        return Admin::content(function (Content $content) {

            $content->header('分析报告');
            $content->description('列表');

            $content->row(function (Row $row) {
                $articles = Article::latest()->published()->paginate(5);
                $tags = Tag::pluck('name', 'id');
                $row->column(12, view('admin.articles.index', compact('articles', 'tags')));
            });
        });
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        $js = Admin::js('/vendor/ueditor/ueditor.all.js');
        return view('admin.articles.create', compact('tags', 'js'));
    }

    public function store(StoreArticleRequest $request)
    {
        $input = $request->all();

        $article = Article::create($input);
        $article->tags()->attach($request->input('tag_list'));
        Flashy::message('文章创建成功!', 'success');
        return redirect('/admin/auth/article/');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $tags = Tag::pluck('name', 'id');
        return view('admin.articles.edit', compact('article', 'tags'));
    }

    public function update(StoreArticleRequest $request)
    {
        //根据id查询到需要更新的article
        $article = Article::find($request->get('id'));
        //使用Eloquent的update()方法来更新，
        //request的except()是排除某个提交过来的数据，我们这里排除id
        $article->update($request->except('id'));
        // 跟attach()类似，我们这里使用sync()来同步我们的标签
        $article->tags()->sync($request->get('tag_list'));
        Flashy::message('编辑成功!', 'success');
        return redirect('/admin/auth/article/');
    }
}
