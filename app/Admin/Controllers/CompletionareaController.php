<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Support\Facades\DB;

class CompletionAreaController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('地区生产总值完成情况');
            $content->description('(不含保税区)');

            $content->row(function (Row $row) {
                $tag_id = DB::table('article_tag')->where('tag_id', '8')->first();
                $article_id =  $tag_id->article_id;
                $article = Article::findOrFail($article_id);
                $row->column(4, view('admin.charts.economic-monitor.completion-area.month-text', compact('article')));
                $row->column(8, view('admin.charts.economic-monitor.completion-area.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.gross-value'));
            });

        });
    }
}
