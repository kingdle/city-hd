<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Support\Facades\DB;

class CompletionAssetsController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('固定资产投资完成情况');
            $content->description('(不含保税区)');

            $content->row(function (Row $row) {
                $tag_id = DB::table('article_tag')->where('tag_id', '9')->orderBy('updated_at','desc')->first();
                $article_id =  $tag_id->article_id;
                $article = Article::findOrFail($article_id);
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.month-text', compact('article')));
                $row->column(8, view('admin.charts.economic-monitor.completion-assets.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-assets.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-assets.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-town'));
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-area'));
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-dept'));
            });

        });
    }
}
