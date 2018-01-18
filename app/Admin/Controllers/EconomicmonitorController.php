<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Support\Facades\DB;

class EconomicmonitorController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('新经济运行监测');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(3, view('admin.charts.economic-monitor.area'));
                $row->column(3, view('admin.charts.economic-monitor.industry'));
                $row->column(3, view('admin.charts.economic-monitor.assets'));
                $row->column(3, view('admin.charts.economic-monitor.sale'));
            });
            $content->row(function(Row $row) {
                $row->column(3, view('admin.charts.economic-monitor.tables'));
                $row->column(9, view('admin.charts.economic-monitor.charts'));

            });
            $content->row(function (Row $row) {
                $tag_id = DB::table('article_tag')->where('tag_id', '4')->first();
                $article_id =  $tag_id->article_id;
                $article = Article::findOrFail($article_id);
                $row->column(12, view('admin.charts.economic-monitor.economic2017', compact('article')));
            });
            $content->body(view('admin.charts.economic-monitor.economicline'));
            $content->row(function (Row $row) {
                $tag_id_country = DB::table('article_tag')->where('tag_id', '1')->first();
                $article_id_country =  $tag_id_country->article_id;
                $article_country = Article::findOrFail($article_id_country);
                $row->column(4, view('admin.charts.economic-monitor.country', compact('article_country')));
                $tag_id_province = DB::table('article_tag')->where('tag_id', '2')->first();
                $article_id_province =  $tag_id_province->article_id;
                $article_province = Article::findOrFail($article_id_province);
                $row->column(4, view('admin.charts.economic-monitor.shandong', compact('article_province')));
                $tag_id_city = DB::table('article_tag')->where('tag_id', '3')->first();
                $article_id_city =  $tag_id_city->article_id;
                $article_city = Article::findOrFail($article_id_city);
                $row->column(4, view('admin.charts.economic-monitor.qingdao', compact('article_city')));
            });

        });
    }

}
